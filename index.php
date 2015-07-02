<?php include_once 'header.php'; ?>
    <div class="container">
        <div class="row text-center">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <div class="panel panel-warning">
                    <div class="panel-heading">
                        <strong>
                            <h3 class="text-center">LOGIN FORM</h3>
                        </strong>
                    </div>
                    <div class="panel-body" style="color:#8A6D3B">
                        <div class="row">
                            <div class="col-sm-4">
                                <label>Username</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="username" id="username" name="username" class="form-control" placeholder="Email address" required autofocus>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-4">
                                <label>Password</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                            </div>
                        </div>
                        <br>
                        <button class="btn btn-lg btn-block text-center" type="submit" style="width:100px;background-color:#FCF8E3;color:#8A6D3B;border:1px solid #8A6D3B;">Login</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>
<?php include_once 'footer.php'; ?>