<style>
p {
    text-align : justify;
}
</style>
<div class="header-container container">
    <div class="header-row">
        <div class="header-column">
            <div class="header-row">
                <div class="header-logo">
                    <a href="index.php">
                        <img alt="Porto" width="220" height="70" src="img/logo.png">
                    </a>
                </div>
            </div>
        </div>
        <div class="header-column justify-content-end">
            <div class="header-row">
                <div class="header-nav order-2 order-lg-1">
                    <div class="header-nav-main header-nav-main-square header-nav-main-effect-1 header-nav-main-sub-effect-1">
                        <nav class="collapse">
                            <ul class="nav nav-pills" id="mainNav">
                                <li class="dropdown-full-color dropdown-secondary">
                                    <a class="nav-link" href="index.php">
                                        Home
                                    </a>
                                </li>
                                <li class="dropdown-full-color dropdown-secondary">
                                    <a class="nav-link" href="about.php">
                                        About Us
                                    </a>
                                </li>
                                <li class="dropdown dropdown-full-color dropdown-secondary">
                                    <a class="nav-link dropdown-toggle" class="dropdown-toggle">
                                        Departments
                                    </a>
                                    <ul class="dropdown-menu">
                                        <?php 
                                            $dept_name_query= "SELECT `dept_id`,`dept_name` from `department` where 1";
                                            $name_result = mysqli_query($conn,$dept_name_query);
                                            while($name_row = mysqli_fetch_assoc($name_result)){

                                        ?>
                                        <li><a class="dropdown-item" href="departments.php?dept_id=<?php echo $name_row['dept_id']; ?>"><?php echo $name_row['dept_name']; ?></a></li>
                                        <?php
                                            }
                                        ?>
                                    </ul>
                                </li>
                                <li class="dropdown-full-color dropdown-secondary">
                                    <a class="nav-link" href="faculty.php">
                                        Faculty
                                    </a>
                                </li>
                                <li class="dropdown-full-color dropdown-secondary">
                                    <a class="nav-link" href="central_facilities.php">
                                        Central Facilities
                                    </a>
                                </li>
                                <li class="dropdown-full-color dropdown-secondary">
                                    <a class="nav-link" href="alumni.php">
                                        Alumni
                                    </a>
                                </li>
                                <li class="dropdown-full-color dropdown-secondary">
                                    <a class="nav-link" href="contact.php">
                                        Contact
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>