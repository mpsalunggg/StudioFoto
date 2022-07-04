<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar"
    style="background-image: url('<?= base_url('assets/portofolio/background.jpg'); ?>'); background-repeat: repeat; background-position:center center;">

    <!-- Sidebar - Brand -->
    <div class="sidebar-brand d-flex align-items-center justify-content-center mb-0" href="index.html">
        <div class="sidebar-brand-icon">
            <i class="fas fa-solid fa-camera-retro"></i>
        </div>
    </div>
    <div class="sidebar-brand d-flex align-items-center justify-content-center pt-0">Online Studio Photo</div>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Query Menu -->
    <?php
        $role_id = $this->session->userdata('role_id');
        $queryMenu = "SELECT `user_menu`.`id`, `menu`
                        FROM `user_menu` JOIN `user_access_menu`
                        ON `user_menu`.`id` = `user_access_menu`.`menu_id`
                        WHERE `user_access_menu`.`role_id` = $role_id
                        ORDER BY `user_access_menu`.`menu_id` ASC
                    ";
        $menu = $this->db->query($queryMenu)->result_array();
    ?>
    <!-- Looping Menu -->
    <?php foreach($menu as $m): ?>
    <div class="sidebar-heading">
        <?= $m['menu']; ?>
    </div>

    <?php
        $menuId = $m['id'];
        $querySubMenu = "SELECT *
                            FROM `user_sub_menu` JOIN `user_menu`
                            ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                            WHERE `user_sub_menu`.`menu_id` = $menuId
                            AND `user_sub_menu`.`is_active` = 1
                        ";
        $subMenu = $this->db->query($querySubMenu)->result_array();        
    ?>

    <?php foreach ($subMenu as $sm): ?>
    <?php if ($title == $sm['title']): ?>
    <li class="nav-item active">
        <?php else: ?>
    <li class="nav-item">
        <?php endif; ?>
        <!-- Nav Item - Dashboard -->
        <a class="nav-link" href="<?= base_url($sm['url']);?>">
            <i class="<?=$sm['icon'];?>"></i>
            <span><?= $sm['title']; ?></span></a>
    </li>
    <?php endforeach; ?>

    <!-- Divider -->
    <hr class=" sidebar-divider">

    <?php endforeach; ?>

    <!-- Divider
    <hr class="sidebar-divider d-none d-md-block"> -->

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('auth/logout');?>" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-fw fa-solid fa-door-open"></i>
            <span>Logout!</span></a>
    </li>

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->