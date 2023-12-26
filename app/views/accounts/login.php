<main class="bg-body-tertiary py-4">
    <div class="container col-xl-10 col-xxl-8">
        <div class="row align-items-center g-lg-5">
            <div class="col-lg-7 text-center text-lg-start">
                <img class="des-cart" src="<?php echo _WEB_ROOT ?>/public/assets/clients/images/logo.png" />
            </div>
            <div class="col-md-10 mx-auto col-lg-5 border rounded-3">
                <h1 class="text-center">Đăng nhập</h1>
                <h4 class="text-center text-danger"><?php echo $this->data['error'] ?></h4>
                <form class="p-4 p-md-5 rounded-3 bg-body-tertiary" action=<?php echo _WEB_ROOT."/dang-nhap" ?> method="POST">
                    <div class="form-floating mb-3">
                        <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <div class="checkbox mb-3">
                        <label>
                            <input type="checkbox" value="remember-me"> Remember me
                        </label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" name="submit" type="submit">Sign up</button>
                    <hr class="my-4">
                    <small class="text-body-secondary">By clicking <a href="<?php echo _WEB_ROOT.'/dang-ky'?>">Sign up</a>, you agree to the terms of use.</small>
                </form>
            </div>
        </div>
    </div> 
</main>