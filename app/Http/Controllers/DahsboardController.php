<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\StockMovementItem;
use Illuminate\Http\JsonResponse;
use Carbon\Carbon;

class DahsboardController extends Controller
{
    public function index()
    {
        $data['page_title'] = 'Dashboard';

        return view('cms.dashboard.index', $data);
    }

    // ====================================================================================================================
    // API
    // ====================================================================================================================

    public function getData(): JsonResponse
    {
        try {
            // Ambil semua stock movement items dengan relasi stockMovement dan product
            $items = StockMovementItem::with(['stockMovement', 'product'])->get();

            // Ambil semua customer dan mapping by ID
            $customers = Customer::all()->keyBy('id');

            $stock = [];

            foreach ($items as $item) {
                $movement = $item->stockMovement;
                if (!$movement) continue; // Skip kalau tidak ada movement

                $fromType = $movement->from_type;
                $toType = $movement->to_type;
                $fromId = $movement->from_id;
                $toId = $movement->to_id;

                // ========= DARI =========
                if ($fromType == 'agen') {
                    $lokasi = "Agen";
                    $stock[$lokasi][$item->product->name] = ($stock[$lokasi][$item->product->name] ?? 0) - $item->quantity;
                } elseif ($fromType == 'pelanggan') {
                    if (isset($customers[$fromId])) {
                        $lokasi = $customers[$fromId]->code . ' - ' . $customers[$fromId]->name;
                        $stock[$lokasi][$item->product->name] = ($stock[$lokasi][$item->product->name] ?? 0) - $item->quantity;
                    }
                }

                // ========= KE =========
                if ($toType == 'agen') {
                    $lokasi = "Agen";
                    $stock[$lokasi][$item->product->name] = ($stock[$lokasi][$item->product->name] ?? 0) + $item->quantity;
                } elseif ($toType == 'pelanggan') {
                    if (isset($customers[$toId])) {
                        $lokasi = $customers[$toId]->code . ' - ' . $customers[$toId]->name;
                        $stock[$lokasi][$item->product->name] = ($stock[$lokasi][$item->product->name] ?? 0) + $item->quantity;
                    }
                }
            }

            // Format hasilnya jadi array seperti permintaan
            $result = [];

            foreach ($stock as $lokasi => $produkList) {
                $produkFormatted = [];

                foreach ($produkList as $productName => $quantity) {
                    if ($quantity == 0) continue; // kalau qty 0, skip aja
                    $produkFormatted[] = [
                        'name' => $productName,
                        'quantity' => $quantity
                    ];
                }

                if (!empty($produkFormatted)) {
                    $result[] = [
                        'lokasi' => $lokasi,
                        'produk' => $produkFormatted
                    ];
                }
            }

            // 200 Success
            return response()->json([
                'success' => true,
                'message' => 'Data stok per lokasi berhasil diambil',
                'data' => $result
            ], 200);

        } catch (\Exception $e) {
            // 500 Error
            return response()->json([
                'success' => false,
                'message' => 'Gagal mengambil data stok per lokasi',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
