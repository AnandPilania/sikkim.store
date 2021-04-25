import React from 'react';
import HomeLayout from "@/Layouts/HomeLayout";
import ShopCard from "@/Components/ShopCard";

const Index = ({allStores, topPerformingStores, latestStores, featuredStores}) => {
    console.log(allStores)
    return (
        <HomeLayout>
            <div className="pt-20"/>
            <section className="py-4 md:py-6 bg-white">
                <div className="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row md:items-center justify-between">
                    <div>
                        <p className="text-gray-800">All Shops</p>
                        <p className="text-gray-400 text-xs">Browse through all the stores at Sikkim Store.</p>
                    </div>
                </div>
            </section>
            <section className="pt-2 sm:pt-4 lg:pt-8 bg-gray-200 pb-8 md:pb-16">
                <div className="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div className="grid md:grid-cols-2 lg:grid-cols-3  gap-2 lg:gap-4 ">
                        {allStores.data.map(store => <ShopCard key={store.id}  store={store}/> )}
                    </div>
                </div>
            </section>

            <section className="py-4 md:py-6 bg-white">
                <div className="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row md:items-center justify-between">
                    <div>
                        <p className="text-gray-800">Top Performing Shops</p>
                        <p className="text-gray-400 text-xs">Browse through the top performing stores at Sikkim Store.</p>
                    </div>
                </div>
            </section>
            <section className="pt-2 sm:pt-4 lg:pt-8 bg-gray-200 pb-8 md:pb-16">
                <div className="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div className="grid md:grid-cols-2 lg:grid-cols-3  gap-2 lg:gap-4 ">
                        {topPerformingStores.map(store => <ShopCard key={store.id} store={store}/> )}
                    </div>
                </div>
            </section>

            <section className="py-4 md:py-6 bg-white">
                <div className="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row md:items-center justify-between">
                    <div>
                        <p className="text-gray-800">Featured Shops</p>
                        <p className="text-gray-400 text-xs">Browse through the best stores at Sikkim Store.</p>
                    </div>
                </div>
            </section>
            <section className="pt-2 sm:pt-4 lg:pt-8 bg-gray-200 pb-8 md:pb-16">
                <div className="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div className="grid md:grid-cols-2 lg:grid-cols-3  gap-2 lg:gap-4 ">
                        {featuredStores.map(store => <ShopCard key={store.id}  store={store}/> )}
                    </div>
                </div>
            </section>

            <section className="py-4 md:py-6 bg-white">
                <div className="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row md:items-center justify-between">
                    <div>
                        <p className="text-gray-800">Newly Registered Shops</p>
                        <p className="text-gray-400 text-xs">Browse through the latest stores at Sikkim Store.</p>
                    </div>
                </div>
            </section>
            <section className="pt-2 sm:pt-4 lg:pt-8 bg-gray-200 pb-8 md:pb-16">
                <div className="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div className="grid md:grid-cols-2 lg:grid-cols-3  gap-2 lg:gap-4 ">
                        {latestStores.map(store => <ShopCard key={store.id}  store={store}/> )}
                    </div>
                </div>
            </section>
        </HomeLayout>
    );
};

export default Index;
