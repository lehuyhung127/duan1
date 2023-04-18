<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Quản lí đơn hàng
    </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <script src="//cdn.ckeditor.com/4.20.2/full/ckeditor.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./resource/css/app.css">
</head>

<body>
    <div class="container">
        <!-- header -->
        <section class="d-flex justify-content-between align-items-center border-bottom">
            <!-- logo -->
            <div class="py-2">
                <a href="<?= BASE_URL . '/dashboard' ?>" class="text-decoration-none">
                    <h1 class="text-black">F-Watch</h1>
                </a>
            </div>
        </section>
        <!-- body -->
        <div class="row mt-3">
            <div class="col-3">
                <nav>
                    <ul class="list-group">
                        <li class="list-group-item"><a class="text-black text-decoration-none" href="<?= BASE_URL . '/brands-index' ?>">Quản lí thương hiệu</a></li>
                        <li class="list-group-item"><a class="text-black text-decoration-none" href="<?= BASE_URL . '/color-index' ?>">Quản lí màu sắc</a></li>
                        <li class="list-group-item"><a class="text-black text-decoration-none" href="<?= BASE_URL . '/size-index' ?>">Quản lí size</a></li>
                        <li class="list-group-item"><a class="text-black text-decoration-none" href="<?= BASE_URL . '/products-index' ?>">Quản lí sản phẩm</a></li>
                        <li class="list-group-item"><a class="text-black text-decoration-none" href="<?= BASE_URL . '/variation-index' ?>">Quản lí biến thể</a></li>
                        <li class="list-group-item"><a class="text-black text-decoration-none" href="<?= BASE_URL . '/product-image-index' ?>">Quản lí hình nhỏ</a></li>
                        <li class="list-group-item"><a class="text-black text-decoration-none" href="<?= BASE_URL . '/banner-index' ?>">Quản lí banner</a></li>
                        <li class="list-group-item"><a class="text-black text-decoration-none" href="<?= BASE_URL . '/bill-index' ?>">Quản lí đơn hàng</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-9">
                <main>
                    <section class="d-flex justify-content-between align-items-center">
                        <div class="position-relative">
                            <form class="d-flex align-items-center" method="POST" action="<?= BASE_URL . '/bill-show' ?>" autocomplete="off">
                                <div class="col-auto">
                                    <input type="text" class="form-control" placeholder="Số điện thoại khách hàng..." name="tim-kiem-san-pham" id="tim-kiem-san-pham">
                                </div>
                                <div class="col-auto">
                                    <button type="submit" class="btn btn-success ms-2">Tìm kiếm</button>
                                </div>
                            </form>
                            <div id="search-ajax" class="position-absolute start-0 end-0">

                            </div>
                        </div>
                    </section>
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th scope="col" style="max-width: 50px;">Mã đơn</th>
                                <th scope="col" style="max-width: 60px;">Tên khách hàng</th>
                                <th scope="col">Địa chỉ</th>
                                <th scope="col">Ngày đặt</th>
                                <th scope="col" style="max-width: 100px;">Tổng tiền (VNĐ)</th>
                                <th scope="col">Trạng thái đơn</th>
                                <th scope="col" colspan="2">Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($listBill as $key => $item) : ?>
                                <tr>

                                    <td class="bill-id"><?= $item->id ?></td>
                                    <td><?= $item->fullname ?></td>
                                    <td style="max-width: 170px;">
                                        <p class="short-3"><?= $item->address ?></p>
                                    </td>
                                    <td><?= $item->created_at ?></td>
                                    <td><?= $item->total_price ?></td>
                                    <td class="">
                                        <select name="" class="change-status-bill" style="max-width: 120px;">
                                            <option value="0" <?= $item->status == 0 ? 'selected' : '' ?>>Chờ xác nhận</option>
                                            <option value="1" <?= $item->status == 1 ? 'selected' : '' ?>>Đang vận chuyển</option>
                                            <option value="2" <?= $item->status == 2 ? 'selected' : '' ?>>Đã hoàn thành</option>
                                        </select>
                                        <!-- <?= $item->status ?> -->
                                    </td>
                                    <td class="text-end">
                                        <form action="<?= BASE_URL . '/bill-edit' ?>" class="me-2">
                                            <input type="text" name="id" value="<?= $item->id ?>" hidden>
                                            <button class="btn text-white btn-primary">Sửa</button>
                                        </form>
                                    </td>
                                    <td class="text-start">
                                        <form action="<?= BASE_URL . '/bill-detail-index' ?>" class="" method="get">
                                            <input type="text" name="id" value="<?= $item->id ?>" hidden>
                                            <button class="btn text-white bg-danger">Chi tiết</iconify-icon></button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </main>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('.change-status-bill').change(function() {
                // console.log($(this).parent().siblings('.bill-id').text());
                $.ajax({
                    url: "<?= BASE_URL . '/change-status-bill-quickly' ?>",
                    method: "POST",
                    data: {
                        id: $(this).parent().siblings('.bill-id').text(),
                        status: $(this).val()
                    },
                    success: function() {
                        alert('Cập nhật trạng thái thành công')
                    }
                })
            })
            $('#tim-kiem-san-pham').keyup(function() {
                var keywords = $(this).val()
                if (keywords != '') {
                    $.ajax({
                        url: "<?= BASE_URL . '/search-bill-index' ?>",
                        method: "POST",
                        data: {
                            keywords: keywords
                        },
                        success: function(result) {
                            $('#search-ajax').fadeIn()
                            $('#search-ajax').html(result)
                            $('.li-ajax').click(function() {
                                // console.log(1);
                                $("#tim-kiem-san-pham").val($(this).text());
                                $("#tim-kiem-san-pham").focus();
                                $('#search-ajax').fadeOut();
                            })
                        }
                    })
                } else {
                    $('#search-ajax').fadeOut();
                }
            })
        })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>