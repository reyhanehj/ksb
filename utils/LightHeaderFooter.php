<?php
require_once "HeaderFooter.php";
require_once "Constants.php";

class LightHeaderFooter extends HeaderFooter
{
    function getHeader()
    {
        $nav_html = '
<nav id="top-nav" class="navbar navbar-expand-lg fixed-top navbar-dark">
      <div class="container d-flex justify-content-between">
          <a class="navbar-brand" href="#">
              <img
                  src="img/kasabeh-accounting-software-logo.png"
                  class="me-2"
                  alt="نرم افزار حسابداری"
                  height="40"
                  alt="Kasabeh Accounting Software Logo"
                  loading="lazy"/>
          </a>
          <button
                  class="navbar-toggler"
                  type="button"
                  data-mdb-toggle="collapse"
                  data-mdb-target="#navbarToggler"
                  aria-controls="navbarToggler"
                  aria-expanded="false"
                  aria-label="Toggle navigation">

              <i class="fas fa-bars"></i>

          </button>
          <div class="collapse navbar-collapse me-2" id="navbarToggler">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#">خانه</a>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle"
                              href="#"
                              id="nav-ul1"
                              role="button"
                              data-mdb-toggle="dropdown"
                              aria-expanded="false" >
                          نرم افزارها
                      </a>
                      <ul class="dropdown-menu dropdown-menu-end fade-down" aria-labelledby="nav-ul1">
                          <li>
                              <a class="dropdown-item" href="'.Constants::LINK_SHOPPING.'">حسابداری
                                  فروشگاهی (خرید و فروش)</a>
                          </li>
                          <li>
                              <a class="dropdown-item" href="'.Constants::LINK_RESTAURANT.'">نرم افزار رستوران</a>
                          </li>
                          <li>
                              <a class="dropdown-item" href="'.Constants::LINK_INSURANCE.'">حسابداری
                              بیمه</a>
                          </li>
                          <li>
                              <a class="dropdown-item" href="'.Constants::LINK_ANDROID_POS.'">کارتخوان اندرویدی</a>
                          </li>
                          <li>
                              <a class="dropdown-item" href="'.Constants::LINK_REAL_ESTATE.'">آژانس
                                  املاک</a>
                          </li>
                          <li>
                              <a class="dropdown-item" href="'.Constants::LINK_PHOTOGRAPHY.'">حسابداری آتلیه های
                                  عکاسی</a>
                          </li>
                          <li>
                              <a class="dropdown-item" href="'.Constants::LINK_BUILDING.'">پیمانکاری
                                  (ساخت و ساز)</a>
                          </li>
                          <li>
                              <a class="dropdown-item" href="'.Constants::LINK_PORTABLE_PRINTER.'">نرم افزار
                                  پرینتر جیبی</a>
                          </li>
                          <li>
                              <a class="dropdown-item" href="'.Constants::LINK_DISTRIBUTION.'">
                                  نرم افزار پخش مویرگی</a>
                          </li>
                          <li>
                              <a class="dropdown-item" href="'.Constants::LINK_BARCODE_PRINTER.'">نرم
                                  افزار چاپ بارکد</a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle"
                              href="#"
                              id="nav-ul2"
                              role="button"
                              data-mdb-toggle="dropdown"
                              aria-expanded="false">
                          دانلود و خرید
                      </a>
                      <ul class="dropdown-menu dropdown-menu-end fade-down" aria-labelledby="nav-ul2">
                          <li>
                              <a class="dropdown-item" href="ebuy_gen.html">دانلود نرم افزار حسابداری</a>
                          </li>
                          <li>
                              <a class="dropdown-item" href="ebuy_res.html">نرم افزار فست فود</a>
                          </li>
                          <li>
                              <a class="dropdown-item" href="android-pos.html">پوز اندرویدی</a>
                          </li>
                          <li>
                              <a class="dropdown-item" href="insurance-accounting-software-intro.html">حسابداری
                                  بیمه</a>
                          </li>
                          <li>
                              <a class="dropdown-item" href="ebuy_estate.html">آژانس
                                  املاک</a>
                          </li>
                          <li>
                              <a class="dropdown-item" href="download-photo-studio-accounting.html">نرم افزار حسابداری آتلیه عکاسی</a>
                          </li>
                          <li>
                              <a class="dropdown-item" href="BuildingIntro.html">پیمانکاری
                                  (ساخت و ساز)</a>
                          </li>
                          <li>
                              <a class="dropdown-item" href="ebuy.html">نرم افزار پرینتر
                                  جیبی</a>
                          </li>
                          <li>
                              <a class="dropdown-item" href="intro/intro_barcode.html">نرم
                                  افزار چاپ بارکد</a>
                          </li>
                          <li>
                              <a class="dropdown-item" href="http://dl.kasabeh.org/CheckPrint.zip">نرم افزار چاپ چک</a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle"
                         href="#"
                         id="nav-ul3"
                         role="button"
                         data-mdb-toggle="dropdown"
                         aria-expanded="false">
                          به روزرسانی
                      </a>
                      <ul class="dropdown-menu dropdown-menu-end fade-down" aria-labelledby="nav-ul3">
                          <li>
                              <a class="dropdown-item" href="upBuySell.html">حسابداری
                                  فروشگاهی (خرید و فروش)</a>
                          </li>
                          <li>
                              <a class="dropdown-item" href="upRes.html">حسابداری رستوران</a>
                          </li>
                          <li>
                              <a class="dropdown-item" href="upRealState.html">آژانس
                                  املاک</a>
                          </li>
                          <li>
                              <a class="dropdown-item" href="upPhoto.html">آتلیه های
                                  عکاسی</a>
                          </li>
                          <li>
                              <a class="dropdown-item" href="upBuilding.html">پیمانکاری
                                  (ساخت و ساز)</a>
                          </li>
                      </ul>
                  </li>

                  <li class="nav-item">
                      <a class="nav-link" href="#">سوالات متداول</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#">تماس با ما</a>
                  </li>
              </ul>
          </div>
      </div>
  </nav>
';
        return $nav_html;
    }
    function getFooter()
    {
        $footer_html = '<footer class="text-white">
        <!-- Grid container -->
        <div class="container py-5 px-4">
            '.$this->getFooterHead().'
            <!-- Section: Social media -->
            <hr>
            <!-- Section: Links -->
            <section id="footer-links">
                <!--Grid row-->
                <div class="row">
                    <!--Grid column-->
                    <div class="f-column col-lg-3 col-md-6 mt-4">
                        <ul class="list-unstyled mb-0">
                            <li>
                                <i class="fa-solid fa-phone fa-flip-horizontal me-2"></i><span>07132347329 - 07132358136</span>
                            </li>
                            <li>
                                <i class="fa-solid fa-mobile me-2" style="color: #ffffff;"></i><span>09164437598</span>
                            </li>
                            <li>
                                <i class="fa-solid fa-envelope me-1"></i>
                                <img class="img-fluid" src="img/footer/info@kasabeh.org.png" style="height: 12px;">
                                
                            </li>
                            <li>
                                <i class="fa-solid fa-location-pin me-2"></i><span>شیراز، بیست متری سینما سعدی، تقاطع اردیبهشت،
                            برج الکترونیک (برج IT)،
					طبقه پنجم، واحد 63 و 58
					</span>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->
                    <!--Grid column-->
                    <div class="f-column col-lg-3 col-md-6 mt-4">
                        <ul class="list-unstyled mb-0">
                            <li><a href="'.Constants::LINK_SHOPPING.'">نرم افزار حسابداری فروشگاهی</a></li>
                            <li><a href="'.Constants::LINK_SHOPPING.'">نرم افزار فروشگاهی</a></li>
                            <li><a href="'.Constants::LINK_RESTAURANT.'">نرم افزار رستوران</a></li>
                            <li><a href="'.Constants::LINK_INSURANCE.'">نرم افزار حسابداری بیمه</a></li>
                            <li><a href="'.Constants::LINK_REAL_ESTATE.'">نرم افزار حسابداری
                                املاک</a></li>
                            <li><a href="'.Constants::LINK_BARCODE_PRINTER.'">نرم افزار چاپ
                                بارکد</a></li>
                            <li><a href="'.Constants::LINK_ANDROID_POS.'">کارتخوان سیار</a></li>
                            <!--<li><a href="/blog" target="_blank">مجله خبری کسبه</a></li>-->
                        </ul>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="f-column col-lg-3 col-md-6 mt-4">
                        <ul class="list-unstyled mb-0">
                            <li><a href="'.Constants::LINK_PHOTOGRAPHY.'">نرم افزار حسابداری عکاسی</a></li>
                            <li><a href="'.Constants::LINK_BUILDING.'">نرم افزار حسابداری
                                پیمانکاری کسبه (ساخت و ساز)</a></li>
                            <li><a href="'.Constants::LINK_PORTABLE_PRINTER.'">نرم
                                افزار پرینتر جیبی کسبه (چاپ اطلاعات حسابداری موبایل)</a></li>
                            <li><a href="'.Constants::LINK_MOBILE_ACCOUNTING.'" target="_blank">نرم
                                افزار حسابداری اندروید</a></li>
                            <li><a href="'.Constants::LINK_BANK.'" target="_blank">
                                نرم افزار مدیریت چک + بانک کسبه (اندروید)</a></li>
                            <li><a href="'.Constants::LINK_DISTRIBUTION.'">نرم افزار
                                پخش مویرگی</a></li>
                          </ul>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="f-column col-lg-3 col-md-6 mt-4">
                        <ul class="list-unstyled mb-0">
                            <li><a href='.Constants::LINK_OPEN_SRC.'" target="_blank">پروژه های متن باز کسبه</a></li>
                            <li><a href="'.Constants::LINK_ILIA_GRP.'" target="_blank">گروه مهندسین مشاور داده کاوان ایلیا</a></li>
                        </ul>
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->
            </section>
            <!-- Section: Links -->
            <hr>
            '.$this->getSymbols().'
        </div>
        <!-- Grid container -->
        '.$this->getRights().'
    </footer>';
        return $footer_html;
    }
}