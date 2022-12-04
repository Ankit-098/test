<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: *");
    session_start();
    include("./database/connection.php");
    include("./database/create.php");
    include("./database/insert.php");
    include("./database/read.php");
    include("./database/update.php");
    include("./database/mail.php"); 
    include("./database/delete.php");
    
    $creater = new creater();
    $inserter = new inserter();
    $reader = new reader();
    $updater = new updater();
    $mailer = new mailer();
    $deleter = new deleter();
    
    // $inserter->insert_into_staff("Raghav","raghwandersingh2306@gmail.com","6395751967","","rff9b9wn0l","","admin");
    // echo $result;
    // echo "inserting in to enquiry";
    
    $request = $_SERVER['REQUEST_URI'];
    $request = explode('/',$request);
    $_SESSION["router"] = $request;
    switch ($request[1]) {
        //Routes for Homepage login and forgot password
        case '/':
        case '':
            require './home.php';
            break;
        case 'contactUs':
            require './main/contact_us.php';
            break;
        case 'login':
            require './staff_login_pages/login.php';
            break;
        case 'logedin':
            require './staff_login_pages/logedin.php';
            break;
        case 'forgot_password':
            require './staff_login_pages/forgot_password.php';
            break;
        case 'send_reset_link':
            require './staff_login_pages/send_reset_link.php';
            break;
        case 'check_otp':
            require './staff_login_pages/check_otp.php';
            break;
        case "update_reset_password":
            require './updation/update_password_staff.php';
            break;
        //Routes for header section
        case 'header':
            require './dashboard/header.php';
            break;
        case "change_password":
            require './admin_panel_pages/change_password.php';
            break;
        case "update_table_staff":
            require './updation/update_table_staff.php';
            break;
        case "manage_account":
            require './admin_panel_pages/manage_account.php';
            break;
        //Routes for dashboard
        case 'dashboard':
            require './admin_panel_pages/dashboard.php';
            break;
        case 'addArea':
            require './insertion/add_Area.php';
            break;
        //Routes for location
        case 'location':
            require './admin_panel_pages/location.php';
            break;
        case 'addArea':
            require './insertion/add_Area.php';
            break;
        //Routes for recharge
        case 'recharge':
            require './admin_panel_pages/recharge.php';
            break;
        //Routes for plans
        case 'plans':
            require './admin_panel_pages/plan.php';
            break;
        //Routes for Teams
        case 'team':
            require './admin_panel_pages/team.php';
            break;
        case "positions":
            require './insertion/add_positions.php';
            break;
        case "employees":
            require './insertion/team_member_insert.php';
            break;
        //Routes for Devices
        case 'device':
            require './admin_panel_pages/device.php';
            break;
        case 'deviceMAC':
            require './insertion/add_Device.php';
            break;
        //Routes for Payments
        case 'payment':
            require './admin_panel_pages/payment.php';
            break;
        case 'create_recharge_plan':
            require './insertion/create_recharge_plans.php';
            break;
        //Routes for razorpay
        case 'pay_razor':
            require './razorpay_pages/pay.php';
            break;
        case 'verify_razor':
            require './razorpay_pages/verify.php';
            break;
        case 'add_payment_dets':
            require './insertion/add_payment_history.php';
            break;
        // Routes for Hotspot/Customer
        case 'add_customer':
            require './insertion/customers.php';
            break;
        case 'verify_otp':
            require './authentication/verify_otp.php';
            break;
        case 'setPassword':
            require './updation/update_password_customer.php';
            break;
        case 'authenticateUser':
            require './authentication/checkCustomer.php';
            break;
        case 'rechargeWindow':
            require './customer_pages/payment_page.php';
            break;
        case 'checkCustomerRecharge':
            require './authentication/check_customer_recharge.php';
            break;
        case 'rechargePage':
            require './customer_pages/recharge.php';
            break;
        case 'coupons':
            require './customer_pages/coupons.php';
            break;
        case 'forgot_password_customer':
            require './customer_pages/forgot_password.php';
            break;
        case 'send_reset_link_customer':
            require './customer_pages/send_reset_link.php';
            break;
        case 'check_otp_customer':
            require './customer_pages/check_otp.php';
            break;
        case "update_password_customer_recharge":
            require './updation/update_password_customer_recharge.php';
            break;
        case "sign_out":
            session_destroy();
            header("Location: /login");
            break;
        case "connect":
            require './connect.php';
            break;
        default:
            require './404.php';
            break;
    }

    