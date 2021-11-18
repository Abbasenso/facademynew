<!-- modal  -->
    <!-- The Modal -->
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-body">
                <section id="login" class="login">
                    <div class="container">
                        <div class="row justify-content-between">
                            <div class="col-lg-5 col-md-5 d-flex justify-content-center align-items-center hit">
                                <span class="close">&times;</span>
                                <div class="sign-in">
                                    <div class="img-div">
                                        <img src="assets/img/learning.svg" alt="not found">

                                    </div>
                                    <h2 class="text-center">F-academy</h2>
                                    <p class="text-center">Join us for great future</p>
                                     <div class="btns-x">
                                        <div class="btn-5" id="logInBtn">sign In</div>
                                        <div class="btn-5" id="regBtn">Registration</div>
                                    </div> 

                                </div>

                                <img src="/assets/img/learning.svg" alt="img not found"> 
                            </div>
                            <div class="col-lg-5 col-md-6 d-flex py-5 align-items-center hit active" id="kkModi">
                                <div class="registration">
                                     <div class="log-inx active" id="logInBox">
                                    <div class="log-inx">
                                        <h3 class="text-center">Log In</h3>
                                        <form action="" method="POST">
                                            <div class="log-in">
                                                <div class="sign-box">
                                                    <div class="group mtt-20">
                                                        <input name="loginEmail" type="email" required="required"
                                                            class="reg-input"
                                                            placeholder="Ex : asutoshgosh@gmail.com" />
                                                        <label for="mail">User Email</label>
                                                        <div class="bar"></div>
                                                    </div>
                                                    <div class="group">
                                                        <input name="loginPassword" type="password" required="required"
                                                            class="reg-input" placeholder="********" />
                                                        <label for="mail">Password</label>
                                                        <div class="bar"></div>
                                                    </div>
                                                </div>
                                                <div class="reg-submit log">
                                                    <input type="hidden" name="getCourseIdFromLogin" id="courseId1">
                                                    <!-- <label for="user">user id</label><br> -->
                                                    <input type="submit" name="signIn" value="Sign In"
                                                        class="btn-submit">
                                                </div>

                                            </div>
                                        </form>
                                        <a class="fpass" href="#">forget password ?</a>
                                    </div>
                                    <<h4 class="text-center">Create an Account</h4>
                                    <div class="social-reg">
                                        <a href="#" class="social-link"><i class="fa fa-facebook"
                                                aria-hidden="true"></i></a>
                                        <a href="#" class="social-link"><i class="fa fa-google-plus"
                                                aria-hidden="true"></i></a>
                                        <a href="#" class="social-link"><i class="fa fa-twitter"
                                                aria-hidden="true"></i></a>
                                    </div>

                                    <form action="" method="POST">
                                        <div class="group">
                                            <input title="please enter a valid name" name="regisName" type="text"
                                                required="required" class="reg-input r-name"
                                                placeholder="Ex : Asutosh Gosh"
                                                pattern="^([a-zA-Z]{2,}\s[a-zA-Z]{1,}'?-?[a-zA-Z]{2,}\s?([a-zA-Z]{1,})?)" />
                                            <label for="name">Full Name</label>
                                            <div class="bar"></div>
                                        </div>

                                        <div class="group">
                                            <input name="regisEmail" type="email" required="required" class="reg-input"
                                                placeholder="Ex : asutoshgosh@gmail.com" />
                                            <label for="mail">Email</label>
                                            <div class="bar"></div>
                                        </div>
                                        <div class="group">
                                            <input name="regisBirth" type="date" required="required"
                                                class="reg-input" />
                                            <label for="dob">Birth Day</label>
                                            <div class="bar"></div>
                                        </div>
                                        <div class="group">
                                            <input name="regisAddress" type="text" required="required" class="reg-input"
                                                placeholder="Ex : salt lake, kolkata 53, 739202" />
                                            <label for="Address">Address</label>
                                            <div class="bar"></div>
                                        </div>
                                        <div class="group">
                                            <input name="regisPassword" type="password" required="required"
                                                class="reg-input" placeholder="*************"
                                                pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" />
                                            <label for="password">password</label>
                                            <div class="bar"></div>
                                            <p>Must contain at least one number and one uppercase and lowercase letter,
                                                and at least
                                                8 or more characters</p>
                                        </div>


                                        <div class="reg-submit">
                                            <label for="user">user id</label><br>
                                            <input type="hidden" name="getCourseIDFromReg" id="courseId2">
                                            <input type="submit" name="ragistration" value="Sign Up" class="btn-submit">
                                        </div>
                                    </form> 
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

    </div>
    <script src="assets/js/modal.js"></script>
    <!-- end modal  -->