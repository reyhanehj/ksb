<?php


abstract class HeaderFooter
{
    public abstract function getHeader();
    public abstract function getFooter();
    public function getSymbols(){
        return '<section id="symbols">
                <div class="row bank-logos">
                    <div class="container flex-wrap d-flex align-items-center justify-content-center">
                        <a href="https://www.zarinpal.com/" target="_blank">
                            <img src="img/footer/zarrin-pal.png" alt="زرین پال"
                                 class="img-responsive footer-logo"/></a>
                        <a href="#">
                            <img src="img/footer/bank-mellat.png" alt="بانک ملت"
                                 class="img-responsive footer-logo"/></a>
                        <a href="#">
                            <img src="img/footer/behpardakht.png" alt="به پرداخت ملت"
                                 class="img-responsive footer-logo"/></a>
                       <!-- <img id="relTetkV8AlZCRGo9lQk"
                             class="img-responsive left footer-logo" style="cursor: pointer"
                             onclick="window.open("https://trustseal.enamad.ir/?id=12671&amp;Code=relTetkV8AlZCRGo9lQk", "Popup","toolbar=no, location=no, statusbar=no, menubar=no, scrollbars=1, resizable=0, width=580, height=600, top=30")"
                             alt="نماد اعتماد الکترونیکی"
                             src="https://Trustseal.eNamad.ir/logo.aspx?id=12671&amp;Code=relTetkV8AlZCRGo9lQk" />
                        <img onclick="window.open("https://me.sizpay.ir/SizPayNamad/7FA49022EED0641150012799050000127000028","Popup",
        "toolbar=no,scrollbars=no,location=no,statusbar=no,menubar=no, resizable=0,width=450,height=630,top=30")"
                             src ="https://me.sizpay.ir/SizPayNamadImg/7FA49022EED0641150012799050000127000028" style="cursor: pointer;">
                    -->
                    </div>
                </div>
            </section>';
    }
    public function getFooterHead(){
        return '
            <div id="footer-head" class="d-flex align-items-center justify-content-between mb-5">
                <img src="img/kasabeh-accounting-software-logo-light.png" width="100" alt="لوگوی نرم افزار حسابداری کسبه"/>
                <section class="text-center d-flex align-items-center">
                    <span class="m-1 me-3">ما را دنبال کنید! </span>
                    <!-- Twitter -->
                    <a class="btn btn-primary btn-floating m-1" style="background-color: #55acee" href="https://t.me/HesabdariKasabeh" target="_blank" role="button"><i class="fa fab fa-telegram"></i></a>
                    <!-- Instagram -->
                    <a class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac" href="https://www.instagram.com/hesabdari_kasabeh/" target="_blank" role="button"><i class="fab fa-instagram"></i></a>
                    <!-- Linkedin -->
                    <a class="btn btn-primary btn-floating m-1" style="background-color: #0082ca" href="https://www.linkedin.com/company/kasabeh/" target="_blank" role="button"><i class="fab fa-linkedin-in"></i></a>
                </section>
            </div>
';
    }
    public function getRights(){
        return '        
        <section id="rights" class="text-center d-flex flex-column">
            <small id="copyright" class="p-2">
                تمامی كالاها و خدمات این فروشگاه، حسب مورد دارای مجوزهای لازم از مراجع مربوطه می‌باشند و فعالیت‌های این سایت تابع قوانین و مقررات جمهوری اسلامی ایران است.
            </small>
            <small id="admin" class="px-3 py-2">
                صاحب امتیاز و مسئول وب سایت: سعیدخلفی نژاد
            </small>
        </section>';
    }
    public function getBackToTop(){
        return '<a href="#" class="back-to-top"><i class="fa-solid fa-arrow-up"></i></a>';
    }
    public function getSpinner(){
        return '
        <div id="spinner" class="d-none show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
          <div class="spinner-border text-primary" role="status"></div>
        </div>';
    }
}