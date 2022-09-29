<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <?php include 'header.php';?>
      <!-- Breadcrumbs -->
      <section class="bg-gray-7">
	  
        <div class="container">
          <ul class="breadcrumbs-custom-path">
            <li><a href="index.html">Home</a></li>
            <!-- <li><a href="#">Pages</a></li> -->
            <li class="active">Contacts</li>
          </ul>
        </div>
      </section>
      <!-- Contacts-->
      <section class="section section-lg bg-default text-md-left">
        <div class="container">
          <div class="row row-60 justify-content-center">
            <div class="col-lg-8">
              <h4 class="text-spacing-25 text-transform-none">Get in Touch</h4>
              <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                <div class="row row-20 gutters-20">
                  <div class="col-md-6">
                    <div class="form-wrap">
                      <input class="form-input" id="contact-your-name-5" type="text" name="name" data-constraints="@Required">
                      <label class="form-label" for="contact-your-name-5">Your Name*</label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-wrap">
                      <input class="form-input" id="contact-email-5" type="email" name="email" data-constraints="@Email @Required">
                      <label class="form-label" for="contact-email-5">Your E-mail*</label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-wrap">
                      <!--Select 2-->
                      <select class="form-input" data-minimum-results-for-search="Infinity" data-constraints="@Required">
                        <option value="1">Select a Service</option>
                        <option value="2">General Enquiries</option>
                        <option value="3">Job Enquiries</option>
                        <option value="4">Other Enquiries</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-wrap">
                      <input class="form-input" id="contact-phone-5" type="text" name="phone" data-constraints="@Numeric">
                      <label class="form-label" for="contact-phone-5">Your Phone*</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-wrap">
                      <label class="form-label" for="contact-message-5">Message</label>
                      <textarea class="form-input textarea-lg" id="contact-message-5" name="message" data-constraints="@Required"></textarea>
                    </div>
                  </div>
                </div>
                <button class="button button-secondary button-winona" type="submit">SUBMIT</button>
              </form>
            </div>
            <div class="col-lg-4">
              <div class="aside-contacts">
                <div class="row row-30">
                  <div class="col-sm-6 col-lg-12 aside-contacts-item">
                    <p class="aside-contacts-title">Get social</p>
                    <ul class="list-inline contacts-social-list list-inline-sm">
                      <li><a class="icon mdi mdi-facebook" href="https://www.facebook.com/hellohydrotechglobal"></a></li>
                      <li><a class="icon mdi mdi-twitter" href="#"></a></li>
                      <li><a class="icon mdi mdi-instagram" href="#"></a></li>
                      <li><a class="icon mdi mdi-linkedin" href="https://www.linkedin.com/company/hydro-tech-est/"></a></li>
                    </ul>
                  </div>
                  <div class="col-sm-6 col-lg-12 aside-contacts-item">
                    <p class="aside-contacts-title">Phone Saudi Arabia & UAE</p>
                    <div class="unit unit-spacing-xs justify-content-center justify-content-md-start">
                      <div class="unit-left"><span class="icon mdi mdi-phone"></span></div>
                      <div class="unit-body"><a class="phone" href="tel:#">+966-543050607,+971-506073358</a></div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-lg-12 aside-contacts-item">
                    <p class="aside-contacts-title">E-mail</p>
                    <div class="unit unit-spacing-xs justify-content-center justify-content-md-start">
                      <div class="unit-left"><span class="icon mdi mdi-email-outline"></span></div>
                      <div class="unit-body"><a class="mail" href="mailto:#">info@hydrotechglobal.com</a></div> 
                    </div>
                  </div>
                  <div class="col-sm-6 col-lg-12 aside-contacts-item">
                    <p class="aside-contacts-title">Address Saudi Arabia</p>
                    <div class="unit unit-spacing-xs justify-content-center justify-content-md-start">
                      <div class="unit-left"><span class="icon mdi mdi-map-marker"></span></div>
                      <div class="unit-body"><a class="address" href="#">P.O Box: 6341  <br class="d-md-none">Dammam | Saudi Arabia</a></div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-lg-12 aside-contacts-item">
                    <p class="aside-contacts-title">Address United Arab Emirates</p>
                    <div class="unit unit-spacing-xs justify-content-center justify-content-md-start">
                      <div class="unit-left"><span class="icon mdi mdi-map-marker"></span></div>
                      <div class="unit-body"><a class="address" href="#">Room No: 221,Floor 2,<br class="d-md-none">Hilal Bank Building,Al Qusais,Dubai , PO Box : 28296</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Page Footer-->
      <?php include 'footer.php';?>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>