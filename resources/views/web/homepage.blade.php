<x-layout>
   <h1 class="text-center my-4">Selamat Datang E-Comerce</h1>

    <div class="d-flex justify-content-center">
        <x-card 
            image="https://suaranusantara.com/wp-content/uploads/2024/09/photo_2024-09-03-17.32.11.jpeg" 
            title="Produk Terbaru" 
            content="iPhone terbaru dengan desain elegan berbalut material titanium, dilengkapi layar Super Retina XDR dan kamera Pro yang lebih canggih. Hadir dengan performa tinggi berkat chip A17 Pro, memberikan pengalaman multitasking, fotografi, dan gaming yang maksimal. Cocok untuk pengguna yang menginginkan teknologi terdepan dengan tampilan yang mewah." 
            link="/product"
        />
    </div>

    <div class="text-center mt-4">
        <button class="btn btn-warning" onclick="showAlert()">Tampilkan Alert</button>
    </div>

    <div id="alertContainer" class="mt-3"></div>
   <div class="row">
      <h3>Categories</h3>
 @foreach($categories as $category)
      <div class="col-2">
        <div class="card">
          <img src="{{ $category['image'] }}" class="card-img-top" alt="...">
          <div class="card-body">
          <h5 class="card-title">{{ $category['name'] }}</h5>
          <p class="card-text">
      {{ $category['description'] }}
          </p>
          <a href="/category/{{ $category['slug'] }}" class="btn
           btn-primary">Detail</a>
          </div>
        </div>
      </div>
 @endforeach
 </div>
</x-layout>
