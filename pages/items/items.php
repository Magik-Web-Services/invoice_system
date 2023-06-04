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
                        <h3 class="page-title"> Items </h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Items</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Items</li>
                            </ol>
                        </nav>
                    </div>


                    <form class="row f-row">
                        <div class="col-md-12 f-nm">
                            <label for="validationDefault02" class="form-label">Type</label>
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">Good</label>
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">Service</label>
                        </div>
                        <div class="col-md-7">
                            <label for="validationDefault03" class="form-label">Name:</label>
                            <input type="tel" class="form-control" id="validationDefault03" required>
                        </div>
                        <div class="col-md-7">
                            <label for="validationDefault01" class="form-label">Unit</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>select menu</option>
                                <option value="1">box</option>
                                <option value="2">cm</option>
                                <option value="3">dz</option>
                                <option value="3">ft</option>
                                <option value="3">ml</option>
                            </select>
                        </div>

                        <div class="col-md-7">
                            <label for="validationDefault03" class="form-label">Selling Price:</label>
                            <div class="input-group">
                                <div class="input-group-text">INR</div>
                                <input type="text" class="form-control" id="autoSizingInputGroup" required>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <label for="validationTextarea" class="form-label">Description</label>
                            <textarea class="form-control" id="validationTextarea" required></textarea>
                            <div class="invalid-feedback">
                                Please enter a message in the textarea.
                            </div>
                        </div>

                    </form>
                    <div class="pd">
                    <button type="button" class="btn btn-success">Save</button>&nbsp;&nbsp;
                    <button type="button" class="btn btn-danger">Cancel</button>
                    </div>

                    <!-- common:../../commons/_footer.html -->
                    <?php include('../../pages/common/footer.php'); ?>
                    <!-- common:../../commons/_footer.html -->