<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .box {
            border-radius: 20px;
            /* background: var(--Background, #F9F9F9); */
            box-shadow: 0px 4px 100px -22px rgba(80, 80, 80, 0.20);
        }
    </style>
</head>
<?php
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
    $url = "https://";
else
    $url = "http://";
// Append the host(domain name, ip) to the URL.   
$url .= $_SERVER['HTTP_HOST'];

// Append the requested resource location to the URL   
$url .= $_SERVER['REQUEST_URI'];
?>

<body class="bg-[#F4F7FC] ">
    <div class="my-8 ml-8">
    <div class="bg-white h-[800px] max-h-full w-[240px] flex flex-col box justify-between py-4 mb-8">
        <div class="flex flex-col">
            <span class="pl-11 pt-6 text-[#0091D0] font-[600] text-[24px] pb-4">PHARMADI</span>
            <div class="flex items-center justify-center mx-7 <?= strpos($url, '/PharmaDI-Admin/product') ? 'text-white bg-[#0091D0]' : 'text-[#0091D0]' ?>"
                onclick="window.location.href='http://localhost/PharmaDI-Admin/product/product-list.php'"
                style="border-radius: 2px 40px;">
                <svg width="20" height="20" viewBox="0 0 20 20"
                    fill="<?= strpos($url, '/PharmaDI-Admin/product') ? 'white' : '#0091D0' ?>"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M11.7769 2.88361C9.32111 0.427793 5.33943 0.427793 2.88361 2.88361C0.427793 5.33943 0.427793 9.32111 2.88361 11.7769L8.22324 17.1166C10.6791 19.5724 14.6607 19.5724 17.1166 17.1166C19.5724 14.6607 19.5724 10.6791 17.1166 8.22324L11.7769 2.88361ZM3.7675 3.7675C5.73516 1.79983 8.92538 1.79983 10.893 3.7675L13.3075 6.18196C13.3045 6.19153 13.3014 6.20132 13.2982 6.21131C13.2234 6.44568 13.096 6.79219 12.8901 7.21935C12.4787 8.07294 11.7527 9.25092 10.5016 10.502C9.25052 11.7531 8.07266 12.479 7.21918 12.8903C6.79208 13.0961 6.44563 13.2234 6.2113 13.2983C6.20132 13.3014 6.19155 13.3045 6.18199 13.3075L3.7675 10.893C1.79983 8.92538 1.79983 5.73516 3.7675 3.7675ZM7.15812 14.2837L9.10712 16.2327C11.0748 18.2003 14.265 18.2003 16.2327 16.2327C18.2003 14.265 18.2003 11.0748 16.2327 9.10712L14.2836 7.15807C14.2102 7.34038 14.1219 7.54273 14.0162 7.76206C13.5496 8.73013 12.745 10.0265 11.3855 11.3859C10.0261 12.7454 8.72982 13.5499 7.76184 14.0164C7.54262 14.122 7.34036 14.2103 7.15812 14.2837Z"
                        fill="<?= strpos($url, '/PharmaDI-Admin/product') ? 'white' : '#0091D0' ?>" />
                </svg>
                <span class="pl-2  text-[14px] py-2">Sản phẩm</span>
            </div>
            <div class="flex items-center justify-center mx-7 mt-2 <?= strpos($url, '/PharmaDI-Admin/customer') ? 'text-white bg-[#0091D0]' : 'text-[#0091D0]' ?>"
                onclick="window.location.href='http://localhost/PharmaDI-Admin/customer/customer-list.php'"
                style="border-radius: 2px 40px;">
                <svg width="20" height="20" viewBox="0 0 20 20"
                    fill="<?= strpos($url, '/PharmaDI-Admin/customer') ? 'white' : '#0091D0' ?>"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M7.50008 1.04175C5.31395 1.04175 3.54175 2.81395 3.54175 5.00008C3.54175 7.18621 5.31395 8.95842 7.50008 8.95842C9.68621 8.95842 11.4584 7.18621 11.4584 5.00008C11.4584 2.81395 9.68621 1.04175 7.50008 1.04175ZM4.79175 5.00008C4.79175 3.50431 6.00431 2.29175 7.50008 2.29175C8.99585 2.29175 10.2084 3.50431 10.2084 5.00008C10.2084 6.49585 8.99585 7.70842 7.50008 7.70842C6.00431 7.70842 4.79175 6.49585 4.79175 5.00008Z"
                        fill="<?= strpos($url, '/PharmaDI-Admin/customer') ? '#FFFFFFF' : '#0091D0' ?>" />
                    <path
                        d="M12.5001 1.87508C12.1549 1.87508 11.8751 2.1549 11.8751 2.50008C11.8751 2.84526 12.1549 3.12508 12.5001 3.12508C13.5356 3.12508 14.3751 3.96455 14.3751 5.00008C14.3751 6.03562 13.5356 6.87508 12.5001 6.87508C12.1549 6.87508 11.8751 7.1549 11.8751 7.50008C11.8751 7.84526 12.1549 8.12508 12.5001 8.12508C14.226 8.12508 15.6251 6.72597 15.6251 5.00008C15.6251 3.27419 14.226 1.87508 12.5001 1.87508Z"
                        fill="<?= strpos($url, '/PharmaDI-Admin/customer') ? '#FFFFFFF' : '#0091D0' ?>" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M3.06521 11.2671C4.23135 10.6007 5.80064 10.2084 7.50008 10.2084C9.19953 10.2084 10.7688 10.6007 11.935 11.2671C13.0834 11.9233 13.9584 12.9252 13.9584 14.1667C13.9584 15.4083 13.0834 16.4102 11.935 17.0664C10.7688 17.7328 9.19953 18.1251 7.50008 18.1251C5.80064 18.1251 4.23135 17.7328 3.06521 17.0664C1.91675 16.4102 1.04175 15.4083 1.04175 14.1667C1.04175 12.9252 1.91675 11.9233 3.06521 11.2671ZM3.68538 12.3524C2.72259 12.9025 2.29175 13.5674 2.29175 14.1667C2.29175 14.7661 2.72259 15.431 3.68538 15.9811C4.63049 16.5212 5.97787 16.8751 7.50008 16.8751C9.0223 16.8751 10.3697 16.5212 11.3148 15.9811C12.2776 15.431 12.7084 14.7661 12.7084 14.1667C12.7084 13.5674 12.2776 12.9025 11.3148 12.3524C10.3697 11.8123 9.0223 11.4584 7.50008 11.4584C5.97787 11.4584 4.63049 11.8123 3.68538 12.3524Z"
                        fill="<?= strpos($url, '/PharmaDI-Admin/customer') ? '#FFFFFFF' : '#0091D0' ?>" />
                    <path
                        d="M15.134 11.0563C14.7968 10.9823 14.4635 11.1957 14.3896 11.5329C14.3157 11.87 14.529 12.2033 14.8662 12.2772C15.5265 12.422 16.0542 12.6708 16.4025 12.9557C16.7512 13.2411 16.8751 13.5198 16.8751 13.7501C16.8751 13.959 16.7746 14.2043 16.4975 14.4617C16.2184 14.7209 15.7896 14.9604 15.2366 15.127C14.906 15.2265 14.7188 15.5751 14.8183 15.9056C14.9178 16.2362 15.2664 16.4234 15.5969 16.3239C16.2824 16.1175 16.8953 15.7982 17.3482 15.3775C17.8032 14.9549 18.1251 14.3989 18.1251 13.7501C18.1251 13.0294 17.7299 12.4268 17.1941 11.9884C16.6578 11.5495 15.9355 11.232 15.134 11.0563Z"
                        fill="<?= strpos($url, '/PharmaDI-Admin/customer') ? '#FFFFFFF' : '#0091D0' ?>" />
                </svg>

                <span class="pl-2 text-[14px] py-2">Khách hàng</span>
            </div>
            <div class="flex items-center justify-center mx-7 mt-2 <?= strpos($url, '/PharmaDI-Admin/order') ? 'text-white bg-[#0091D0]' : 'text-[#0091D0]' ?>"
                onclick="window.location.href='http://localhost/PharmaDI-Admin/order/order-list.php'"
                style="border-radius: 2px 40px;">
                <svg width="20" height="20" viewBox="0 0 20 20"
                    fill="<?= strpos($url, '/PharmaDI-Admin/order') ? 'white' : '#0091D0' ?>"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M9.11965 1.04175H10.8803C12.4118 1.04174 13.6248 1.04172 14.5742 1.16936C15.5512 1.30072 16.342 1.57748 16.9656 2.20112C17.5893 2.82475 17.866 3.61554 17.9974 4.59256C18.125 5.54191 18.125 6.75494 18.125 8.28641V11.7138C18.125 13.2452 18.125 14.4583 17.9974 15.4076C17.866 16.3846 17.5893 17.1754 16.9656 17.799C16.342 18.4227 15.5512 18.6994 14.5742 18.8308C13.6248 18.9584 12.4118 18.9584 10.8803 18.9584H9.11966C7.58819 18.9584 6.37516 18.9584 5.42581 18.8308C4.4488 18.6994 3.65801 18.4227 3.03437 17.799C2.41073 17.1754 2.13397 16.3846 2.00261 15.4076C1.87498 14.4583 1.87499 13.2452 1.875 11.7138V8.2864C1.87499 6.75493 1.87498 5.54191 2.00261 4.59256C2.13397 3.61554 2.41073 2.82475 3.03437 2.20112C3.65801 1.57748 4.4488 1.30072 5.42581 1.16936C6.37516 1.04172 7.58819 1.04174 9.11965 1.04175ZM5.59237 2.40821C4.75397 2.52094 4.27093 2.73233 3.91825 3.085C3.56558 3.43768 3.35419 3.92071 3.24147 4.75912C3.12633 5.61551 3.125 6.7444 3.125 8.33341V11.6667C3.125 13.2558 3.12633 14.3847 3.24147 15.241C3.35419 16.0794 3.56558 16.5625 3.91825 16.9152C4.27093 17.2678 4.75397 17.4792 5.59237 17.5919C6.44876 17.7071 7.57765 17.7084 9.16667 17.7084H10.8333C12.4224 17.7084 13.5512 17.7071 14.4076 17.5919C15.246 17.4792 15.7291 17.2678 16.0817 16.9152C16.4344 16.5625 16.6458 16.0794 16.7585 15.241C16.8737 14.3847 16.875 13.2558 16.875 11.6667V8.33342C16.875 6.7444 16.8737 5.61551 16.7585 4.75912C16.6458 3.92071 16.4344 3.43768 16.0817 3.085C15.7291 2.73233 15.246 2.52094 14.4076 2.40821C13.5512 2.29308 12.4224 2.29175 10.8333 2.29175H9.16667C7.57765 2.29175 6.44876 2.29308 5.59237 2.40821ZM6.04167 6.66675C6.04167 6.32157 6.32149 6.04175 6.66667 6.04175H13.3333C13.6785 6.04175 13.9583 6.32157 13.9583 6.66675C13.9583 7.01193 13.6785 7.29175 13.3333 7.29175H6.66667C6.32149 7.29175 6.04167 7.01193 6.04167 6.66675ZM6.04167 10.0001C6.04167 9.6549 6.32149 9.37508 6.66667 9.37508H13.3333C13.6785 9.37508 13.9583 9.6549 13.9583 10.0001C13.9583 10.3453 13.6785 10.6251 13.3333 10.6251H6.66667C6.32149 10.6251 6.04167 10.3453 6.04167 10.0001ZM6.04167 13.3334C6.04167 12.9882 6.32149 12.7084 6.66667 12.7084H10.8333C11.1785 12.7084 11.4583 12.9882 11.4583 13.3334C11.4583 13.6786 11.1785 13.9584 10.8333 13.9584H6.66667C6.32149 13.9584 6.04167 13.6786 6.04167 13.3334Z"
                        fill="<?= strpos($url, '/PharmaDI-Admin/order') ? 'white' : '#0091D0' ?>" />
                </svg>
                <span class="pl-2 text-[14px] py-2">Đơn hàng</span>
            </div>
            <div class="flex items-center justify-center mx-7 mt-2 <?= strpos($url, '/PharmaDI-Admin/account') ? 'text-white bg-[#0091D0]' : 'text-[#0091D0]' ?>"
                onclick="window.location.href='http://localhost/PharmaDI-Admin/account/account-list.php'"
                style="border-radius: 2px 40px;">
                <svg width="20" height="20" viewBox="0 0 20 20"
                    fill="<?= strpos($url, '/PharmaDI-Admin/account') ? 'white' : '#0091D0' ?>"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M4.37508 7.75239V6.66675C4.37508 3.56015 6.89348 1.04175 10.0001 1.04175C13.1067 1.04175 15.6251 3.56015 15.6251 6.66675V7.75239C15.8141 7.76568 15.9923 7.78298 16.1599 7.80552C16.91 7.90636 17.5415 8.12211 18.0431 8.62371C18.5447 9.1253 18.7605 9.75687 18.8613 10.507C18.9584 11.2294 18.9584 12.148 18.9584 13.2877V13.3791C18.9584 14.5188 18.9584 15.4374 18.8613 16.1599C18.7605 16.91 18.5447 17.5415 18.0431 18.0431C17.5415 18.5447 16.91 18.7605 16.1599 18.8613C15.4374 18.9584 14.5188 18.9584 13.3791 18.9584H6.62102C5.48136 18.9584 4.56276 18.9584 3.84029 18.8613C3.0902 18.7605 2.45864 18.5447 1.95704 18.0431C1.45544 17.5415 1.2397 16.91 1.13885 16.1599C1.04172 15.4374 1.04173 14.5188 1.04175 13.3792V13.2877C1.04173 12.148 1.04172 11.2294 1.13885 10.507C1.2397 9.75686 1.45544 9.1253 1.95704 8.62371C2.45864 8.12211 3.0902 7.90636 3.84029 7.80552C4.00789 7.78298 4.18606 7.76568 4.37508 7.75239ZM5.62508 6.66675C5.62508 4.2505 7.58384 2.29175 10.0001 2.29175C12.4163 2.29175 14.3751 4.2505 14.3751 6.66675V7.71128C14.0638 7.7084 13.7321 7.70841 13.3791 7.70841H6.62102C6.26809 7.70841 5.93636 7.7084 5.62508 7.71128V6.66675ZM2.84092 9.50759C3.07156 9.27695 3.39537 9.12658 4.00685 9.04437C4.63631 8.95974 5.47057 8.95841 6.66675 8.95841H13.3334C14.5296 8.95841 15.3639 8.95974 15.9933 9.04437C16.6048 9.12658 16.9286 9.27695 17.1592 9.50759C17.3899 9.73822 17.5402 10.062 17.6225 10.6735C17.7071 11.303 17.7084 12.1372 17.7084 13.3334C17.7084 14.5296 17.7071 15.3639 17.6225 15.9933C17.5402 16.6048 17.3899 16.9286 17.1592 17.1592C16.9286 17.3899 16.6048 17.5402 15.9933 17.6225C15.3639 17.7071 14.5296 17.7084 13.3334 17.7084H6.66675C5.47057 17.7084 4.63631 17.7071 4.00685 17.6225C3.39537 17.5402 3.07156 17.3899 2.84092 17.1592C2.61029 16.9286 2.45992 16.6048 2.37771 15.9933C2.29308 15.3639 2.29175 14.5296 2.29175 13.3334C2.29175 12.1372 2.29308 11.303 2.37771 10.6735C2.45992 10.062 2.61029 9.73822 2.84092 9.50759Z"
                        fill="<?= strpos($url, '/PharmaDI-Admin/account') ? 'white' : '#0091D0' ?>" />
                </svg>
                <span class="pl-2 text-[14px] py-2">Tài khoản</span>
            </div>
            <div class="flex items-center justify-center mx-7 mt-2 <?= strpos($url, '/PharmaDI-Admin/news') ? 'text-white bg-[#0091D0]' : 'text-[#0091D0]' ?>"
                onclick="window.location.href='http://localhost/PharmaDI-Admin/news/news-list.php'"
                style="border-radius: 2px 40px;">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="<?= strpos($url, '/PharmaDI-Admin/news') ? 'white' : '#0091D0' ?>" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M9 5.25C8.58579 5.25 8.25 5.58579 8.25 6C8.25 6.41421 8.58579 6.75 9 6.75H15C15.4142 6.75 15.75 6.41421 15.75 6C15.75 5.58579 15.4142 5.25 15 5.25H9Z"
                        fill="<?= strpos($url, '/PharmaDI-Admin/news') ? 'white' : '#0091D0' ?>" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M11.9425 1.25C9.86994 1.24999 8.23716 1.24997 6.96128 1.42337C5.65122 1.60141 4.60609 1.97468 3.78484 2.80484C2.96469 3.63387 2.59692 4.68702 2.4213 6.00741C2.24998 7.29551 2.24999 8.94462 2.25 11.0411V16.139C2.24999 17.6466 2.24998 18.8402 2.34601 19.7388C2.44091 20.6269 2.64447 21.428 3.22584 21.9638C3.69226 22.3937 4.28211 22.6646 4.91165 22.7367C5.69912 22.8268 6.43439 22.4508 7.15868 21.9377C7.89163 21.4185 8.78075 20.6321 9.90254 19.6399L9.93905 19.6076C10.4591 19.1476 10.8112 18.8372 11.105 18.6224C11.3889 18.4148 11.5623 18.3397 11.7084 18.3103C11.9009 18.2715 12.0991 18.2715 12.2916 18.3103C12.4377 18.3397 12.6111 18.4148 12.895 18.6224C13.1888 18.8372 13.5409 19.1476 14.061 19.6076L14.0975 19.64C15.2193 20.6321 16.1084 21.4186 16.8413 21.9377C17.5656 22.4508 18.3009 22.8268 19.0883 22.7367C19.7179 22.6646 20.3077 22.3937 20.7742 21.9638C21.3555 21.428 21.5591 20.6269 21.654 19.7388C21.75 18.8402 21.75 17.6466 21.75 16.139V11.041C21.75 8.94462 21.75 7.2955 21.5787 6.00741C21.4031 4.68702 21.0353 3.63387 20.2152 2.80484C19.3939 1.97468 18.3488 1.60141 17.0387 1.42337C15.7628 1.24997 14.1301 1.24999 12.0575 1.25H11.9425ZM4.8512 3.85977C5.34797 3.35762 6.02251 3.06474 7.16328 2.90971C8.32645 2.75163 9.85725 2.75 12 2.75C14.1427 2.75 15.6736 2.75163 16.8367 2.90971C17.9775 3.06474 18.652 3.35762 19.1488 3.85977C19.6467 4.36303 19.9379 5.04819 20.0918 6.20518C20.2484 7.38292 20.25 8.93223 20.25 11.0975V16.0909C20.25 17.6572 20.249 18.7702 20.1625 19.5794C20.0739 20.4088 19.9104 20.72 19.7576 20.8608C19.5238 21.0763 19.2298 21.2107 18.9178 21.2464C18.7182 21.2692 18.3835 21.192 17.7083 20.7137C17.0497 20.2472 16.2211 19.5157 15.0547 18.484L15.0286 18.4609C14.5413 18.0299 14.1372 17.6725 13.7804 17.4116C13.4074 17.1388 13.0312 16.9292 12.5878 16.8398C12.1998 16.7617 11.8002 16.7617 11.4122 16.8398C10.9688 16.9292 10.5926 17.1388 10.2196 17.4116C9.86283 17.6725 9.45871 18.0299 8.97146 18.4609L8.94527 18.484C7.77887 19.5157 6.95026 20.2472 6.29165 20.7137C5.61646 21.192 5.28182 21.2692 5.08218 21.2464C4.77019 21.2107 4.47617 21.0763 4.24237 20.8608C4.08963 20.72 3.92614 20.4088 3.83752 19.5794C3.75104 18.7702 3.75 17.6572 3.75 16.0909V11.0975C3.75 8.93223 3.75156 7.38292 3.90821 6.20518C4.06209 5.04819 4.35333 4.36303 4.8512 3.85977Z"
                        fill="<?= strpos($url, '/PharmaDI-Admin/news') ? 'white' : '#0091D0' ?>" />
                </svg>
                <span class="pl-2 text-[14px] py-2">Bài đăng</span>
            </div>
        </div>
        <div class="flex justify-center items-center bg-[#d8d8d8] mx-7 rounded-[10px] mb-4">
            <span class="pl-2 text-[#505050] text-[14px] p-2">Đăng xuất</span>
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M13.4697 5.46967C13.7626 5.17678 14.2374 5.17678 14.5303 5.46967L20.5303 11.4697C20.8232 11.7626 20.8232 12.2374 20.5303 12.5303L14.5303 18.5303C14.2374 18.8232 13.7626 18.8232 13.4697 18.5303C13.1768 18.2374 13.1768 17.7626 13.4697 17.4697L18.1893 12.75H4C3.58579 12.75 3.25 12.4142 3.25 12C3.25 11.5858 3.58579 11.25 4 11.25H18.1893L13.4697 6.53033C13.1768 6.23744 13.1768 5.76256 13.4697 5.46967Z"
                    fill="#1C274C" />
            </svg>
        </div>
    </div>
    </div>
</body>

</html>