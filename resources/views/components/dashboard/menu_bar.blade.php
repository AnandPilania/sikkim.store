<div class="w-72 h-screen flex flex-col" x-show="SideMenu">
    <x-dashboard.menu_bar_header :store="$store"/>

    <div class="flex-1 bg-white overflow-hidden overflow-y-scroll bg-dark">
        <x-dashboard.menu_divider name="Home"/>
        <x-dashboard-menu-link name="Dashboard" link="store.admin.dashboard" :store="$store" icon="dashboard"/>
        <x-dashboard-menu-link name="Analytics" link="store.admin.analytics" :store="$store" icon="analytics"/>

        <x-dashboard.menu_divider name="Sales"/>
        <x-dashboard-menu-link name="Orders" link="store.admin.orders" :store="$store" icon="order"/>
        <x-dashboard-menu-link name="Shipments" link="store.admin.shipments" :store="$store" icon="shipment"/>
        <x-dashboard-menu-link name="Invoices" link="store.admin.invoices" :store="$store" icon="invoice"/>
        <x-dashboard-menu-link name="Refunds" link="store.admin.refunds" :store="$store" icon="refund"/>

        <x-dashboard.menu_divider name="Catalogue"/>
        <x-dashboard-menu-link name="Products" link="store.admin.products.index" :store="$store" icon="product"/>
        <x-dashboard-menu-link name="Categories" link="store.admin.categories.index" :store="$store" icon="category"/>
        <x-dashboard-menu-link name="Attributes" link="store.admin.attributes.index" :store="$store" icon="attribute"/>

        <x-dashboard.menu_divider name="Store Settings"/>
        <x-dashboard-menu-link name="Profile" link="store.admin.profile" :store="$store" icon="profile"/>
        <x-dashboard-menu-link name="Account" link="store.admin.account" :store="$store" icon="account"/>
        <x-dashboard-menu-link name="Security" link="store.admin.security" :store="$store" icon="security"/>
    </div>
</div>
