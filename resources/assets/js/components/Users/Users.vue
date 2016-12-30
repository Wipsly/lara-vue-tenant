<template>
<div class="page-content">
    <div class="sidebar sidebar-main sidebar-default">
        <div class="sidebar-content">
            <div class="sidebar-category sidebar-category-visible">
                <div class="category-content no-padding">
                    <div class="sidebar-category">
                        <div class="category-title">
                            <span>Search user</span>
                            <ul class="icons-list">
                                <li><a href="#" data-action="collapse" class=""></a></li>
                            </ul>
                        </div>
                        <div class="category-content" style="display: block;">
                            <form action="#">
                                <div class="has-feedback has-feedback-left">
                                    <input type="search" class="form-control" placeholder="Type and hit Enter">
                                    <div class="form-control-feedback">
                                        <i class="icon-search4 text-size-base text-muted"></i>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="category-title">
                        <span>Actions</span>
                        <ul class="icons-list">
                            <li><a href="#" data-action="collapse"></a></li>
                        </ul>
                    </div>
                    <ul class="navigation navigation-main navigation-accordion">
                        <li><router-link :to="{ name: 'users-create' }"><i class="icon-googleplus5"></i> <span>Create user</span></router-link></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="content-wrapper">
        <transition
                enter-active-class="animated fadeIn"
                leave-active-class="animated fadeOut"
                mode="out-in"
                keep-alive
        >
            <!-- Router View -->
            <router-view></router-view>
            <!-- /Router View -->
        </transition>
    </div>
</div>
</template>
