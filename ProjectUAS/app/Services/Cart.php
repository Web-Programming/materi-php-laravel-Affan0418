<?php 

namespace App\Services;

class Cart
{
	public $items = null; // kumpulan produk yang ditangani dalam class ini sebagai array asosiatif
	public $totalQty = 0; // total jumlah semua item
	public $totalPrice = 0; // total harga semua item

	public function __construct($oldCart)
	{
		if ($oldCart) {
			$this->items = $oldCart->items;
			$this->totalQty = $oldCart->totalQty;
			$this->totalPrice = $oldCart->totalPrice;
		}
	}

	public function add($item, $id)
	{
		$storedItem = ['qty' => 0, 'price' => $item->price, 'item' => $item];
		
		// Mengecek apakah cart (keranjang) sebelumnya tidak kosong
		if ($this->items) {
			// Mengecek apakah user sudah memiliki item yang ingin ditambahkan,
			// menggunakan ID produk sebagai kunci untuk melacak
			if (array_key_exists($id, $this->items)) {
				$storedItem = $this->items[$id];
			}
		}

		// Kode berikut dijalankan jika produk belum ada dalam daftar item
		$storedItem['qty']++; // tambahkan jumlah item
		$storedItem['price'] = $item->price * $storedItem['qty']; 
		// contoh: harga produk 20.000, dan user pilih 3, maka total harga produk jadi 60.000

		$this->items[$id] = $storedItem; 
		// baris ini menambahkan produk ke keranjang jika belum ditambahkan sebelumnya

		$this->totalQty++; 
		$this->totalPrice += $item->price; 
		// menambahkan harga produk ke total harga keseluruhan
	}
}

?>
