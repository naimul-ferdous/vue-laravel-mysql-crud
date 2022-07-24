<template>
    <div class="container-fluid">
        <div class="top-header px-5 py-3">
            <img :src="pic" class="rounded mx-auto d-block" alt="...">
            <h1 class="text-center mt-2 font-weight-bold">Victorian Bangladeshi Community Foundation

                VBCF </h1>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light navx-padding bg-none">
            <div class="navbar-nav py-2 mx-auto border-bottom border-dark align-items-center">
                <!-- <router-link to="/" class="nav-item nav-link border-right border-dark">
                    Products List
                </router-link>
                <router-link to="/create" class="nav-item nav-link border-right border-dark">
                    Create Product
                </router-link> -->
                <router-link to="/create" class="nav-item nav-link border-right border-dark">
                    Home
                </router-link>
                <router-link to="/create" class="nav-item nav-link border-right border-dark">
                    Program
                </router-link>
                <router-link to="/create" class="nav-item nav-link border-right border-dark">
                    What we do
                </router-link>
                <router-link to="/create" class="nav-item nav-link border-right border-dark">
                    About
                </router-link>
                <router-link to="/create" class="nav-item nav-link border-right border-dark">
                    Meat The Team
                </router-link>
                <router-link to="/create" class="nav-item nav-link border-right border-dark">
                    Download
                </router-link>

                <div class="d-flex align-items-center mr-5 left-margin-50">
                    <span class="mr-2">info@vbcf.com.au</span>
                    <font-awesome-icon :icon="{ prefix: 'fab', iconName: 'facebook' }" />
                </div>

            </div>
            <div class="d-flex align-items-center">
                <font-awesome-icon :icon="{ prefix: 'fas', iconName: 'user' }" size="2x" />
                <span class="fontsizec mx-2">Login</span>
            </div>
        </nav>

        <router-view> </router-view>

        <footer class="py-5" id="footer-bg">
            <div class="nav justify-content-center pb-2">
                <h5 class="text-center text-white">Victorian Bangladeshi Community Foundation, PO BOX 1348 Werribee
                    Plaza, Vic 3029, Australia</h5>
            </div>
            <p class="text-center text-white">©2017 by Victorian Bangladeshi Community Foundation - VBCF.</p>
        </footer>

    </div>
</template>;

<style scoped>
#footer-bg {
    background-color: #80BC69;
}

.nav-link {
    color: #000 !important;
}

.left-margin-50 {
    margin-left: 300px;
}

.navx-padding {
    padding: 0 300px;
}

.fontsizec {
    font-size: 20px;
}
</style>

<script>
export default {
    data() {
        return {
            pic: '../images/Logo.jpg'
        }
    },
}</script>;
