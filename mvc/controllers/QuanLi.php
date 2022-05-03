<?php
require_once './mvc/helper/authorization.php';
class QuanLi extends Controller{
    

    //render trang quan li, lua chon ql sp, ql danh muc...
    function Default(){
        if (!isAdmin()) {
            header("Location: ".BASE_URL.'login');
            exit();
        } 

        $this->view('quan-li', []);
        

        //TẤT CẢ CÁC HÀM ĐỀU TRẢ VỀ STRING THÔNG BÁO ĐÃ THỰC HIỆN YÊU CẦU HAY BỊ LỖI. VÍ DỤ: Thêm sản phẩm thành công !!, Sản phẩm đã tồn tại,....

        //----------------------------//
        
        //ThemCategory($Name,$ImageLink) (Tên, link ảnh của danh mục)

        //SuaCategory($CurrentUrl , $Name, $ImageLink) (URL  danh mục cần sửa, Tên mới, Link ảnh mới)

        //XoaCategory($CurrentUrl) (URL danh mục cần xóa)

        //----------------------------//

        //ThemSP($Name, $Price, $Images, $Description, $Tag, $View_count, $Categorys) (Tên, Giá, link nhiều ảnh, mô tả, view, MẢNG CHỨA URL CÁC DANH MỤC CHỨA SẢN PHẨM)

        //SuaSP('giuong-pallet', 'giường pallet xịn', 11220000, 'https://i.imgur.com/j3b9h8y.jpg, https://i.imgur.com/k3VhXAr.jpg', 'sahdjsahdjhasjdhsajhdjash', 'giường, pallet, giường pallet', 0, array('giuong','vach-tv')); //(URL sản phẩm cần sửa, Tên, Giá, link nhiều ảnh, mô tả, view, MẢNG CHỨA URL CÁC DANH MỤC CHỨA SẢN PHẨM)

        // XoaSP($CurrentUrl) (URL sản phẩm cần xóa.)

    }
     // san pham
    function QuanLiSanPham() {
        if (!isAdmin()) {
            header("Location: ".BASE_URL.'login');
            exit();
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $url = $_POST['url'];
            $qlModel = $this->model('QuanLiModel');
            $message = $qlModel->XoaSP($url);
            echo "<script>
            alert('".$message."');
            window.location.href='".BASE_URL."quan-li/quan-li-san-pham/';
            </script>"; 
        }
        else {
            $spModel = $this->model('SanPhamModel');
            $allSP = $spModel->TatCaSanPhamDM();
            $this->view('ql-sanpham', [
                'allSP' => $allSP
            ]);
        }
    }

    function ThemSanPham() {
        if (!isAdmin()) {
            header("Location: ".BASE_URL.'login');
            exit();
        }

        //if post to this
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $i = 0;
            $count = count($_POST);
            //categories
            $categories = [];
            foreach ($_POST as $key=>$post) {
                if ($i>4 && $i<$count-1) {
                    $categories[] = $post;
                }
                $i ++;
            }
            
            //khac
            $name = $_POST['name'];
            $price = $_POST['price'];
            $view_count = $_POST['view_count'];
            $images = $_POST['images'];
            $description = $_POST['description'];
            $tags = $_POST['tags'];
    

            $model = $this->model('QuanLiModel');
            $messsage = $model->ThemSP($name, $price, $images, $description, $tags, $view_count, $categories);
            echo "<script>
            alert('".$messsage."');
            window.location.href='".BASE_URL."quan-li/quan-li-san-pham/';
            </script>";          
        } 
        //not post, render themsp view
        else {
            $spModel = $this->model('SanPhamModel');
            $categories = $spModel->GetCategory(false);
            $this->view('them-sanpham', [
                'categories' => $categories
            ]);
        }
    }

    function ChiTietSanPham($url) {

        if (!isAdmin()) {
            header("Location: ".BASE_URL.'login');
            exit();
        }

        $spModel = $this->model('SanPhamModel');
        $SP = $spModel->GetSanPham($url);
        $this->view('ql-sanpham-chitiet', [
            'sanpham' => $SP,
        ]);
    }

    function ChinhSuaSanPham($url=null) {
        if (!isAdmin()) {
            header("Location: ".BASE_URL.'login');
            exit();
        }

        if ($url) {
            $spModel = $this->model('SanPhamModel');
            $SP = $spModel->GetSanPham($url);

            //get categories (khac categories cua san pham hien tai)
            $categories = $spModel->GetCategory(false);
            foreach ($categories as $val1) {
                if (!in_array($val1,$SP[1]))
                {
                    $categoriesView[]= $val1;
                }
                
            }
    
            $this->view('ql-sanpham-chinhsua', [
                'sanpham' => $SP,
                'diff-categories' => $categoriesView
            ]);
        }
        else {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                // foreach ($_POST as $key=>$post) {
                //     echo $key.' '.$post.'<br>';
                // }
                // exit();


                $i = 0;
                $count = count($_POST);
                //categories
                $categories = [];
                foreach ($_POST as $key=>$post) {
                    if ($i>4 && $i<$count-2) {
                        $categories[] = $post;
                    }
                    $i ++;
                }
                // print_r($categories);
                // exit();
                //khac
                $name = $_POST['name'];
                $price = $_POST['price'];
                $view_count = $_POST['view_count'];
                $images = $_POST['images'];
                $description = $_POST['description'];
                $tags = $_POST['tags'];
                $current_url = $_POST['url'];

                // echo $name.'<br>'.$price.'<br>'.$view_count.'<br>'.$images.'<br>'.$description.'<br>'.$tags.'<br>'.$current_url.'<br>';
                // print_r($categories);
                // exit();

                $model = $this->model('QuanLiModel');
                $message = $model->SuaSP($current_url, $name, $price, $images, $description, $tags, $view_count, $categories);
                echo "<script>
                alert('".$message."');
                window.location.href='".BASE_URL."quan-li/quan-li-san-pham/';
                </script>"; 
                
            } else {
                header('Location: '.BASE_URL.'quan-li/quan-li-san-pham');
            }
        }
    }

    function XoaSanPham() {
        if (!isAdmin()) {
            header("Location: ".BASE_URL.'login');
            exit();
        }
    }

    // danh muc
    function QuanLiDanhMuc() {
        if (!isAdmin()) {
            header("Location: ".BASE_URL.'login');
            exit();
        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['action'])) {
                if ($_POST['action'] == 'remove') {
                    if (isset($_POST['url'])) {
                        $url = $_POST['url'];
                        $qlModel = $this->model("QuanLiModel");
                        $message = $qlModel->XoaCategory($url);
                        echo "<script>
                        alert('".$message."');
                        window.location.href='".BASE_URL."quan-li/quan-li-danh-muc/';
                        </script>"; 
                    } 
                    else echo "Error!";
                }
                elseif ($_POST['action'] == 'add') {
                    //verify $_Post data!
                    $name = $_POST['name'];
                    $image = $_POST['image'];
                    $qlModel = $this->model("QuanLiModel");
                    $message = $qlModel->ThemCategory($name, $image);
                    echo "<script>
                        alert('".$message."');
                        window.location.href='".BASE_URL."quan-li/quan-li-danh-muc/';
                        </script>"; 

                }
                else {
                    echo 'Error!';
                }
            } else {
                echo 'Error!';
            }
        }
        else {
            $spModel = $this->model('SanPhamModel');
            $allDM = $spModel->GetCategory();
            $this->view('ql-danhmuc', [
                'allDM' => $allDM
            ]);
        }
    }

    function ThemDanhMuc() {
        if (!isAdmin()) {
            header("Location: ".BASE_URL.'login');
            exit();
        }
        echo 'them dm';
    }

    function XoaDanhMuc() {
        if (!isAdmin()) {
            header("Location: ".BASE_URL.'login');
            exit();
        }
        echo 'xoa dm';
    }

    function ChinhSuaDanhMuc() {
        if (!isAdmin()) {
            header("Location: ".BASE_URL.'login');
            exit();
        }
        echo 'sua dm';
    }
    
}

?>