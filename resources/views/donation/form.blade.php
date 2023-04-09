<title>Yok Donasi</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="jumbotron">
    <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
        @csrf

        <div class="row">
            <div class="col-md-4 offset-md-4">
                <h4 class="text-center" >Yok Donasi</h4>
                <h5 class="text-center">Dian Hendiani</h5>
                <h3 class="text-center">("09876567890987654")</h3>
            </div>
           
            <div class="col-md-4 offset-md-4">
                <label for="">Nama Pengirim</label>
                <input type="text" class="form-control" name="cmd" value="Masukan Nama Anda" />

                <label for="">Alamat</label>
                <textarea type="text" class="form-control" name="business" value="Masukan Alamat Rumah Anda" ></textarea>

                <label for="">Masukan Nomor Telepon Anda</label>
                <input type="text" class="form-control" name="item_name" value="Masukan Nomor Telepon Anda" />
               
                <label for="">Masukan KTP Anda</label>
                <input type="text" class="form-control" name="item_name" value="Masukan KTP Anda" />

                <label for="">Bukti Transfer</label>
                <input type="text" class="form-control" name="currency_code" value="Masukan Bukti Transfer" />

            </div>

            <div class="col-md-4 offset-md-4">
                <label for="">Jumlah Donasi</label>
                <input type="number" name="amount" class="form-control" value="" >
            </div>

            <div class="col-md-4 offset-md-4">
                <br>
                <input type="submit" class="btn btn-info" value="Donation" >
            </div>
        </div>
    </form>
</div>
</body>  