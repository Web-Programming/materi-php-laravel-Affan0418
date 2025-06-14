<div class="card border border-black">
    <div class="card-body">

        <select class="form-select border border-black" onChange="window.location.href=this.value" aria-label="Default select example">
            <option selected>Urutkan</option>
            <option value="/home/">Terbaru</option>
            <option value="2">Terlama</option>
            <option value="3">Termahal</option>
            <option value="3">Termurah</option>
        </select>
        <hr class="opacity-100">


        <select class="form-select border border-black" onChange="window.location.href=this.value" aria-label="Default select example" >
            <option selected>Pilih Menu</option>
            <option value="/">Semua</option>
            @foreach ($menu_category as $pilihan)
                <option value="/home/{{ $pilihan->slug }}">{{ $pilihan->nama_category }}</option> 
            @endforeach
        </select>
        <hr class="opacity-100">


        <button class="btn btn-success w-100" type="submit"><b>Pesan</b></button>
    </div>
</div>