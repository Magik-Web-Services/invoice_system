<?php include('../common/header.php'); ?>

<body>
    <div class="container-scroller">
        <!-- common:../../common/_navbar.html -->

        <?php include('../../pages/common/navbar.php'); ?>
        <!-- common -->
        <div class="container-fluid page-body-wrapper">
            <!-- common:../../commons/_sidebar.html -->
            <?php include('../../pages/common/sidebar.php'); ?>
            <!-- common -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="page-header">
                        <h3 class="page-title"> New Customer </h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">New Customer</a></li>
                                <li class="breadcrumb-item active" aria-current="page">New Customer</li>
                            </ol>
                        </nav>
                    </div>


                    <form class="row f-row">
                        <div class="col-md-12 f-nm">
                            <label for="validationDefault02" class="form-label">First name</label>
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">Business</label>
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">Individual</label>
                        </div>

                        <div class="col-md-3">
                            <label for="validationDefault01" class="form-label">Salutation</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Salutation</option>
                                <option value="1">Mr.</option>
                                <option value="2">Mrs.</option>
                                <option value="3">Miss.</option>
                                <option value="3">Ms.</option>
                                <option value="3">Dr.</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="validationDefault02" class="form-label">First name</label>
                            <input type="text" class="form-control" id="validationDefault02" required>
                        </div>
                        <div class="col-md-3">
                            <label for="validationDefaultUsername" class="form-label">Last name</label>
                            <div class="input-group">

                                <input type="text" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" required>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <label for="validationDefault03" class="form-label">Customer Phone:</label>
                            <input type="tel" class="form-control" id="validationDefault03" required>
                        </div>
                        <div class="col-md-10">
                            <label for="validationDefault03" class="form-label">Customer Email:</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1">
                        </div>
                        <div class="col-md-10">
                            <label for="validationDefault03" class="form-label">Company name:</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-10">
                            <label for="validationDefault03" class="form-label">Website:</label>
                            <input type="text" class="form-control">
                        </div>

                        <div class="col-10">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                                <label class="form-check-label" for="invalidCheck2">
                                    Agree to terms and conditions
                                </label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary" type="submit">Submit form</button>
                        </div>
                    </form>



                    <!-- common:../../commons/_footer.html -->
                    <?php include('../../pages/common/footer.php'); ?>
                    <!-- common:../../commons/_footer.html -->