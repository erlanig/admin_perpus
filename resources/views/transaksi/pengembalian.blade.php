
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Form Pengembalian Buku</div>

                    <div class="card-body">
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if(session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif

                        <form method="post" action="{{ route('transaksi.pengembalian') }}">
                            @csrf

                            <div class="form-group">
                                <label for="idtransaksi">ID Transaksi</label>
                                <input type="text" name="idtransaksi" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="tgl_pengembalian">Tanggal Pengembalian</label>
                                <input type="date" name="tgl_pengembalian" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="idpetugas">ID Petugas</label>
                                <input type="text" name="idpetugas" class="form-control" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
