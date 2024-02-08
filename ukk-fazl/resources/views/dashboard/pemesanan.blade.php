<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Pemesanan</title>
</head>
<body class="bg-slate-800">

    @include('components.nav')

    <div class="container mx-auto my-10 p-8 bg-white rounded-md shadow-md">
        <h1 class="text-2xl font-bold mb-6">Kasir App</h1>

        <div class="container mx-auto my-10 p-8 bg-white rounded-md shadow-md">
            <h1 class="text-2xl font-bold mb-6">Kasir App</h1>
    
            <!-- Menu Pertama -->
            <div class="flex items-center mb-4">
                <label for="quantity" class="mr-4">Jumlah Menu Pertama:</label>
                <button onclick="decreaseQuantity()" class="px-4 py-2 bg-gray-200 rounded">-</button>
                <input type="text" id="quantity" value="1" readonly class="mx-4 p-2 w-16 text-center border">
                <button onclick="increaseQuantity()" class="px-4 py-2 bg-gray-200 rounded">+</button>
            </div>
    
            <div class="mb-4">
                <label for="price">Harga per item Menu Pertama:</label>
                <span id="price" class="ml-2 font-semibold">10</span> USD
            </div>
    
            <div class="mb-6">
                <label for="total1">Total Harga Menu Pertama:</label>
                <span id="total1" class="ml-2 font-semibold">10</span> USD
            </div>
    
            <!-- Menu Kedua -->
            <div class="flex items-center mb-4">
                <label for="quantity2" class="mr-4">Jumlah Menu Kedua:</label>
                <button onclick="decreaseQuantity2()" class="px-4 py-2 bg-gray-200 rounded">-</button>
                <input type="text" id="quantity2" value="1" readonly class="mx-4 p-2 w-16 text-center border">
                <button onclick="increaseQuantity2()" class="px-4 py-2 bg-gray-200 rounded">+</button>
            </div>
    
            <div class="mb-4">
                <label for="price2">Harga per item Menu Kedua:</label>
                <span id="price2" class="ml-2 font-semibold">15</span> USD
            </div>
    
            <div class="mb-6">
                <label for="total2">Total Harga Menu Kedua:</label>
                <span id="total2" class="ml-2 font-semibold">15</span> USD
            </div>
    
            <!-- Grand Total -->
            <div class="mb-6">
                <label for="grandTotal">Grand Total:</label>
                <span id="grandTotal" class="ml-2 font-semibold">25</span> USD
            </div>
    
        </div>

        <script>
            var quantity = 0;
            var pricePerItem = 10;
    
            var quantity2 = 0;
            var pricePerItem2 = 15;
    
            function decreaseQuantity() {
                if (quantity > 1) {
                    quantity--;
                    updateTotal();
                }
            }
    
            function increaseQuantity() {
                quantity++;
                updateTotal();
            }
    
            function decreaseQuantity2() {
                if (quantity2 > 1) {
                    quantity2--;
                    updateTotal();
                }
            }
    
            function increaseQuantity2() {
                quantity2++;
                updateTotal();
            }
    
            function updateTotal() {
                var total1 = quantity * pricePerItem;
                var total2 = quantity2 * pricePerItem2;
                var grandTotal = total1 + total2;
    
                document.getElementById('quantity').value = quantity;
                document.getElementById('quantity2').value = quantity2;
    
                document.getElementById('total1').innerText = total1;
                document.getElementById('total2').innerText = total2;
                document.getElementById('grandTotal').innerText = grandTotal;
            }
    
            // Panggil updateTotal() saat aplikasi dimuat
            updateTotal();
        </script>
    
</body>
</html>