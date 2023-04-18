<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý Size</title>
    <link rel="icon" href="public/uploads/iconFwatch/favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>

<style>
    body {
        font-family: 'Roboto', sans-serif;
    }

    .frm-search {
        position: relative;
    }

    .search-ajax {
        position: absolute;
        width: 400px;
        top: 55px;
        left: 235px;
        border: none;
    }
</style>

<body>
    <div class="container">
        <header class="m-3">
            <div class="header-main d-flex justify-content-around align-items-center">
                <div class="head-logo">
                    <a href="<?= BASE_URL . '/size-index' ?>" class="text-decoration-none text-black fw-bold fs-4"><iconify-icon icon="ic:baseline-watch"></iconify-icon> <span class="">F-Watch</span></a>
                </div>
                <div class="col-md-5 mx-auto">

                </div>
            </div>
        </header>
        <!-- end header -->

        <!-- menu -- prodct -->
        <div class="box-content">
            <div class="boxmpr row gap-2 ">
                <div class="boxmenu col-3 ">
                    <div class="p-3 ">
                        <a href="<?= BASE_URL . '/brands-index' ?>" class="list-group-item list-group-item-action py-1"><iconify-icon icon="mdi:registered-trademark"></iconify-icon> Quản lý thương hiệu</a>
                        <a href="<?= BASE_URL . '/color-index' ?>" class="list-group-item list-group-item-action  py-1"><iconify-icon icon="ic:baseline-color-lens"></iconify-icon> Quản lý màu sắc</a>
                        <a href="<?= BASE_URL . '/size-index' ?>" class="list-group-item list-group-item-action  py-1"><iconify-icon icon="ic:baseline-format-size"></iconify-icon> Quản lý size</a>
                        <a href="<?= BASE_URL . '/products-index' ?>" class="list-group-item list-group-item-action  py-1"><iconify-icon icon="ri:shopping-bag-2-fill"></iconify-icon> Quản lý sản phẩm</a>
                        <a href="<?= BASE_URL . '/variation-index' ?>" class="list-group-item list-group-item-action  py-1"><iconify-icon icon="mdi:drag-variant"></iconify-icon> Quản lý biến thể </a>
                        <a href="<?= BASE_URL . '/product-image-index' ?>" class="list-group-item list-group-item-action  py-1"><iconify-icon icon="material-symbols:image"></iconify-icon> Quản lý ảnh nhỏ </a>
                        <a href="<?= BASE_URL . '/banner-index' ?>" class="list-group-item list-group-item-action  py-1"><iconify-icon icon="mdi:image-area"></iconify-icon> Quản lý banner </a>
                        <a href="<?= BASE_URL . '/bill-index' ?>" class="list-group-item list-group-item-action  py-1"><iconify-icon icon="material-symbols:order-approve-outline"></iconify-icon> Quản lý đơn hàng </a>
                    </div>
                </div>
                <!-- ========== -->
                <div class="box-product col bg-secondary rounded bg-opacity-10">
                    <div class="bg-white my-3 rounded">
                        <div class="d-flex justify-content-between align-items-center p-2 frm-search">
                            <h5 class="fw-bold">List Size</h5>
                            <form method="POST" action="<?= BASE_URL . '/size-show' ?>" autocomplete="off" class="input-group w-50">
                                <input class="form-control border-end-0 border rounded-pill" type="search" placeholder="Nhập kích thước " name="tim-kiem-size" id="tim-kiem-size" required>
                                <span class="input-group-append">
                                    <button class="btn  btn-success  btn-outline-secondary bg-white border-bottom-0 border rounded-pill mx-2" type="button">
                                        <iconify-icon icon="ic:baseline-search"></iconify-icon>
                                    </button>
                                </span>
                            </form>
                            <div id="search-ajax" class="search-ajax"></div>
                            <a href="<?= BASE_URL . '/size-create' ?> " class="btn btn-primary mb-2 px-3">Thêm Size</a>
                        </div>
                        <div class="p-2">
                            <table class="table">
                                <thead class="table-dark">
                                    <tr>
                                        <td>#</td>
                                        <td>Kích Thước</td>
                                        <td>Chức năng</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($listSize as $key => $item) : ?>
                                        <tr>
                                            <td><?= ++$key ?></td>
                                            <td><?= $item->name ?></td>
                                            <td class="d-flex p-3 ">
                                                <form action="<?= BASE_URL . '/size-edit' ?>" class="me-2">
                                                    <input type="text" name="id" value="<?= $item->id ?>" hidden>

                                                    <button class="btn text-white bg-info"><iconify-icon icon="ph:note-pencil-bold"></iconify-icon></button>
                                                </form>
                                                <form action="<?= BASE_URL . '/size-destroy' ?>" class="">
                                                    <input type="text" name="id" value="<?= $item->id ?>" hidden>

                                                    <button class=" btn text-white bg-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm không')"><iconify-icon icon="material-symbols:delete-rounded"></iconify-icon></button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end menu -- prodct  -->
    </div>
    <script>
        $(document).ready(function() {
            $('#tim-kiem-size').keyup(function() {
                // ktra người dùng đang gõ gì
                var keywords = $(this).val()
                // if-else: hiển thị dữ liệu nếu có

                if (keywords != '') {
                    // có dữ liệu thì xử lí ajax
                    $.ajax({
                        // gửi thông tin sang route(index)
                        url: "<?= BASE_URL . '/search-size-index' ?>",
                        // phương thức gửi
                        method: "POST",
                        // dũ liệu gửi đi để xử lí
                        data: {
                            keywords: keywords
                        },
                        // khi xử lí thành công ajax 
                        success: function(result) {
                            $('#search-ajax').fadeIn()
                            // nối kết quả vào khối div
                            $('#search-ajax').html(result)
                            // khi sự kiện nầo được click thì sẽ được nối vào ô input
                            $('.li-ajax').click(function() {
                                // console.log(1);
                                $("#tim-kiem-size").val($(this).text());
                                // con tror khi nối sẽ xuất hiện 
                                $("#tim-kiem-size").focus();
                                $('#search-ajax').fadeOut();
                            })
                            // console.log(result);
                        }
                    })
                } else {
                    $('#search-ajax').fadeOut();
                }
            })

        })
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.0/iconify-icon.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>