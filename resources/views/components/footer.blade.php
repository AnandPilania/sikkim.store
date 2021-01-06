<footer class="footer bg-gray-800 py-16">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-10">

        <!--Newsletter Signup Form-->
        <div data-aos="zoom-in-down" data-aos-delay="200" class="w-full">
            <div class="max-w-lg mx-auto text-left md:text-center">
                <p class="uppercase text-base md:text-xl font-semibold mb-2 bg-clip-text text-transparent bg-gradient-to-tr from-blue-600 to-green-600">
                    Subscribe to our newsletter
                </p>
                <p class="text-xs font-medium text-gray-500 mb-4 md:mb-8">
                    Be the first to know about what we are up to, and get latest news, blogs, updates and maybe offers.
                    Stay in touch with us, subscribe to your mailing list.
                </p>
            </div>

            <div class="max-w-md mx-auto flex flex-col justify-start">

                <div>
                    <div class="hidden md:flex justify-between w-full p-2 bg-white shadow-sm rounded-xl overflow-hidden mx-auto focus-within:ring-2 focus-within:ring-blue-600">
                        <label for="newsletterEmail" hidden></label>
                        <input id="newsletterEmail" type="text" class="border-none focus:outline-none focus:ring-0" placeholder="johndoe@mail.com" />
                        <button type="button" class="bg-blue-600 hover:bg-blue-700 transform hover:scale-105 hover:-translate-x-1 transition-all text-white font-semibold text-base px-8 py-2 outline-none rounded-xl text-center uppercase"> JOIN </button>
                    </div>

                    @error('email')
                    <div class="mt-1 pl-2 text-xs font-normal font-bodyFont tracking-tight text-red-600 text-left">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <div class="md:hidden">
                        <label for="newsletterEmailMobile" hidden>Email Address:</label>
                        <input id="newsletterEmailMobile" type="text" placeholder="Enter your email address" autocomplete="email" name="subscriber_email" class="appearance-none rounded-md relative w-full px-3 py-2.5 border border-gray-400 @error('subscriber_email'){{'border-red-500'}} @enderror placeholder-gray-400 text-gray-700  focus:outline-none focus:border-blue-600 text-base">
                        <button type="submit" class="font-semibold focus:outline-none mt-2 w-full text-sm flex items-center justify-center py-3 text-gray-200  bg-blue-600 rounded-md hover:text-white hover:bg-blue-700"> JOIN </button>
                    </div>

                    @error('subscriber_email')
                    <div class="mt-1 pl-2 text-xs font-normal font-bodyFont tracking-tight text-red-600 text-left">{{$message}}</div>
                    @enderror
                </div>
            </div>
        </div>

        <!--Logo-->
        <div data-aos-delay="400" data-aos="fade-up" class="mt-24">
            <a href="{{ route('home') }}">
                <img src="{{ asset('assets/images/logo.png') }}" class="w-14 rounded-full h-14 object-cover inline-block mb-3" alt="Sikkim Store Logo">
            </a>
        </div>

        <!--Footer Grid-->
        <div data-aos-delay="400" data-aos="fade-up" data-aos-anchor-placement="top-bottom" class="grid grid-cols-1 md:grid-cols-2 md:gap-24 md:mb-10">

            <!--First Column-->
            <div class="flex flex-col md:flex-row">

                <!--First Child-->
                <div class="flex-1 flex-col mb-10 md:mb-2">
                    <a href="{{ route('home') }}" aria-label="Home" class="inline-flex font-bodyFont text-base font-normal tracking-wider uppercase text-gray-600 mb-3 md:mb-6 hover:text-blue-600 transition ease-in-out duration-150">
                        Sikkim Store
                    </a>

                    <p class="text-xs text-gray-400 mb-8">
                        Sikkim's e-commerce store. Multi-vendor, Multi-tenant,
                        No commissions and no hidden charges.
                        Empowering local shops and sellers.
                    </p>

                    <div class="text-xs text-gray-600 mb-1">Important Links</div>

                    <div class="flex flex-col lg:flex-row text-xs font-medium tracking-wide text-gray-300 lg:space-x-2 mb-8">
                        <a href="" aria-label="Guides" class="hover:text-blue-600 transition ease-in-out duration-150">Guides</a>
                        <a href="" aria-label="Terms of Use" class="hover:text-blue-600 transition ease-in-out duration-150">Terms of Use</a>
                        <a href="" aria-label="Privacy Policy" class="hover:text-blue-600 transition ease-in-out duration-150">Privacy Policy</a>
                    </div>

                    <div class="text-xs text-gray-400">
                        <p>&copy; {{ now()->format('Y') }} All rights reserved. YES, everything.</p>
                    </div>
                </div>

                <!--Second Child-->
                <div class="flex flex-col md:ml-10 mb-10 md:mb-0">
                    <div class="font-bodyFont text-base font-normal tracking-wider uppercase text-gray-600 mb-3 md:mb-6">
                        Get Help
                    </div>

                    <div class="text-xs font-medium tracking-wide text-gray-300 flex space-y-2 mb-4 flex-col">
                        <a href="" aria-label="Order Status" class="w-max-content hover:text-blue-600 transition ease-in-out duration-150">Order Status</a>
                        <a href="" aria-label="Shipping And Delivery" class="w-max-content hover:text-blue-600 transition ease-in-out duration-150">Shipping & Delivery</a>
                        <a href="" aria-label="Payment Options" class="w-max-content hover:text-blue-600 transition ease-in-out duration-150">Payment Options</a>
                        <a href="" aria-label="Contact Us" class="w-max-content hover:text-blue-600 transition ease-in-out duration-150">Contact Us</a>
                    </div>
                </div>
            </div>

            <!--Second Column-->
            <div class="flex flex-col md:flex-row">

                <!--First Child-->
                <div class="flex flex-col md:ml-8 lg:ml-16 mb-10 md:mb-0">
                    <div class="font-bodyFont text-base font-normal tracking-wider uppercase text-gray-600 mb-3 md:mb-6">
                        About Us
                    </div>

                    <div class="text-xs font-medium tracking-wide text-gray-300 flex space-y-2 mb-4 flex-col">
                        <a href="" aria-label="Careers" class="hover:text-blue-600 transition ease-in-out duration-150">Careers</a>
                        <a href="" aria-label="Sustainability" class="hover:text-blue-600 transition ease-in-out duration-150">Sustainability</a>
                        <a href="" aria-label="Services" class="hover:text-blue-600 transition ease-in-out duration-150">Service</a>
                        <a href="" class="hover:text-blue-600 transition ease-in-out duration-150">Supply Chain</a>
                    </div>
                </div>

                <!-- Second Child-->
                <div class="flex-1 flex-col mb-2 md:text-right">
                    <div class="font-bodyFont text-base font-normal tracking-wider uppercase text-gray-600 mb-3 md:mb-6">
                        Get Social
                    </div>

                    <div class="font-bodyFont text-base font-normal tracking-wider uppercase text-gray-200 mb-10 flex items-center md:justify-end space-x-4">
                        <a class="bg-gray-700 hover:bg-gray-200 p-1.5 rounded-md transition ease-in-out duration-200" href="https://www.facebook.com/sikkim.store" aria-label="Facebook" target="_blank" rel="noreferrer">
                            <svg class="w-5 h-5 transform hover:scale-110 transition ease-in-out duration-150" fill="#1877F2" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </a>

                        <a class="bg-gray-700 hover:bg-gray-200 p-1.5 rounded-md transition ease-in-out duration-200" href="" aria-label="Twitter" target="_blank" rel="noreferrer">
                            <svg class="w-5 h-5 transform hover:scale-110 transition ease-in-out duration-150" fill="#1DA1F2" viewBox="0 0 24 24">
                                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                            </svg>
                        </a>

                        <a class="bg-gray-700 hover:bg-gray-200 p-1.5 rounded-md transition ease-in-out duration-200" href="https://www.instagram.com/sikkim.store/" aria-label="Instagram" target="_blank" rel="noreferrer">
                            <svg class="w-5 h-5 transform hover:scale-110 transition ease-in-out duration-150" fill="#E4405F" viewBox="0 0 24 24">
                                <path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/>
                            </svg>
                        </a>
                    </div>

                    <div class="text-xs text-gray-600">Payment Methods</div>

                    <div class="text-xs font-medium tracking-normal text-gray-300 flex md:justify-end items-center space-x-2 mb-4">

                        <div>
                            <svg viewBox="0 0 160 100" class="h-7 text-blue-500">
                                <path fill="currentColor" d="M151.76461 33.4570312h-4.200372c-.002368 0-.004737.0007686-.006315.0007686l-.002369-.0007686c-.961483 0-1.937176.7170848-2.209517 1.6293887-.011051.0368918-.029997.0722465-.03868.1106755 0 0-.100253.4450075-.27392 1.2143557l-5.769691 25.4630406c-.133407.5756661-.222609.9507329-.249448 1.0483425l.011051.0138344c-.199717.8900152.349702 1.6263144 1.251981 1.7085524l.011841.0169087h4.35983c.955168 0 1.924546-.7101675 2.20557-1.6109427.01342-.043809.034734-.0845438.044996-.1283528l6.293849-27.727276-.009473-.0030743c.213926-.9484272-.413643-1.7354527-1.419333-1.7354527zm-21.544777 25.0254905c-.582574.3573895-1.198302.6632842-1.843238.9238326-.866756.3404808-1.688517.5187912-2.448704.5187912-1.166726 0-2.063479-.1606331-2.669735-.5041882-.607045-.3258777-.925171-.8923208-.914909-1.7031722 0-.9361299.22182-1.6624376.681248-2.2319551.462586-.5479972 1.150149-.9891619 2.002696-1.3181139.84781-.279763 1.890602-.5103368 3.094429-.6755814 1.07042-.1314271 3.186789-.3689182 3.457552-.3704554.270762-.0023057.450744-.1475673.329967.5549145-.053679.305126-.664671 2.7476719-.944906 3.8582693-.081308.332795-.536.8177687-.7444.9476586 0 0 .2084-.1298899 0 0zm8.306017-17.1669929c-1.782454-.9684103-4.570599-1.4579954-8.385746-1.4579954-1.886655 0-3.782782.1475672-5.685225.435016-1.39644.2082851-1.54011.2428711-2.407655.4265616-1.784823.3781412-2.060322 2.1182053-2.060322 2.1182053l-.573101 2.2949785c-.325231 1.467987.533631 1.4072692.916488 1.2935194.779133-.2290367 1.20146-.4565362 2.791302-.8070085 1.519586-.3358693 3.125216-.5871948 4.406404-.5772032 1.878761 0 3.307566.2005992 4.257209.5864262.950432.4035042 1.420911 1.0906143 1.420911 2.0736276.003158.2336482.009473.4542305-.07736.647144-.078151.1798476-.228136.3535466-.677302.4127272-2.681575.1552531-4.606121.3935127-6.923786.7224648-2.286878.3135804-4.287995.8508176-5.960723 1.5948026-1.783244.7701167-3.117322 1.8007819-4.036968 3.1065985-.895174 1.3119653-1.345129 2.9006193-1.347498 4.7721105 0 1.7685015.65283 3.2111254 1.915863 4.3309458 1.278031 1.1052174 2.940497 1.652446 4.951876 1.652446 1.256718-.0084544 2.240304-.096841 2.945234-.2682343.697826-.1713932 1.458803-.4150329 2.262407-.7539765.60073-.2444083 1.248823-.5979549 1.933229-1.0414253.685195-.4450076 1.159622-.7608938 1.768246-1.1490264l.022103.0368918-.171299.7355306c-.00079.0069172-.011052.0107601-.011052.0176773l.005526.0138345c-.19577.8861722.351281 1.62324 1.25277 1.7100895l.011052.0153716h.079729l.003157.0038429c.598362 0 2.652369-.0007686 3.612273-.0038429h.670197c.044206 0 .048942-.0130659.066309-.0230574.920435-.1099069 1.802979-.8400575 2.01059-1.7162382l3.428343-14.4070237c.07894-.3389436.141302-.7301506.178404-1.1805382.042627-.4549991.093148-.8292973.07815-1.0998373.007894-2.0390416-.892017-3.5462261-2.669735-4.5154049zm-20.644473-3.2816063c-.584942-1.1082917-1.468275-2.0006126-2.585269-2.6954085-1.145413-.6932588-2.50633-1.1766953-4.081963-1.458764-1.558267-.2659285-3.410977-.4181073-5.52182-.4227188l-9.8216565.0046115c-1.0112153.0169088-2.0034852.7900998-2.2371462 1.7423699l-6.6032915 27.9778329c-.2407655.9507329.4160113 1.7431384 1.4090706 1.7377584l4.7126898-.0084544c.9993744.0084544 2.0176943-.7785711 2.2537235-1.729304l1.5929997-6.7896318c.2233989-.9515015 1.2393506-1.7485185 2.2553026-1.734684h1.339603c5.748377 0 10.205303-1.149795 13.396828-3.4386249 3.183631-2.3003587 4.786103-5.317802 4.786103-9.0707759-.010262-1.6386117-.296812-3.0189805-.895174-4.1142064zm-10.132678 9.1507082c-1.406702.9960791-3.38098 1.4956558-5.921254 1.4956558h-1.168305c-1.010426.0115287-1.6632556-.7839512-1.423279-1.7377584l1.408281-5.9380456c.209979-.9392042 1.235403-1.738527 2.23162-1.7308412l1.543268-.0076858c1.8014.0076858 3.148898.3012832 4.079595.8846351.914909.5902691 1.358549 1.5056473 1.365654 2.7253831.003947 1.8591939-.702562 3.2895205-2.11558 4.308657"/>
                                <path fill="currentColor" d="M84.8355974 39.8576594c-.8943152 0-2.0673141.7089103-2.6225757 1.5656536 0 0-5.9822242 10.0457618-6.5697767 11.0496504-.3193982.539762-.6430083.1966522-.6970604-.0041256-.0435224-.2440962-1.8539139-10.9795157-1.8539139-10.9795157-.2035725-.8643068-1.1252646-1.6062217-2.2779063-1.6027838l-3.730291.0055008c-.8992289 0-1.4601063.7054724-1.2600437 1.5580901 0 0 2.8514193 15.8311855 3.4073829 19.554512.2772798 2.0593468-.028781 2.4244597-.028781 2.4244597l-3.6965962 6.3134966c-.5412221.8560557-.244989 1.5574025.6500281 1.5574025l4.3227572-.003438c.8950172 0 2.0806516-.6979088 2.61345-1.5553397l16.6297692-27.5498658s1.5906736-2.3536374.1235475-2.3336971c-1.0003133.0137519-5.00999 0-5.00999 0zM53.6140586 58.4825217c-.5825737.3573895-1.1975126.661747-1.8424485.9230641-.8667561.3389435-1.6924635.5187912-2.450283.5187912-1.1635686 0-2.0626898-.1614018-2.6697348-.5034197-.6062556-.3266463-.9259607-.8930894-.9156985-1.7047094 0-.9338242.2241882-1.6624376.6828269-2.2311865.463375-.5487658 1.1477807-.990699 2.0003276-1.3188825.8501787-.2813001 1.8961275-.5087996 3.0960083-.6740442 1.07042-.1314271 3.1891569-.3681496 3.4591301-.3719925.2683944-.0007686.4491659-.1475673.3283884.5549144-.0521001.3051261-.6638814 2.7492091-.9441167 3.8590379-.0844653.3343321-.539157.8193058-.7443998.9484272 0 0 .2052428-.1291214 0 0zm8.3060171-17.1677615c-1.7824545-.9684102-4.5698092-1.4572268-8.3849566-1.4572268-1.8874441 0-3.7827822.1460301-5.6860142.4342474-1.3988084.2067479-1.5393208.2421026-2.4076556.4257931-1.7856121.3796783-2.0603217 2.1182052-2.0603217 2.1182052l-.5731009 2.2965157c-.3244415 1.4672184.53521 1.4065006.9164879 1.2927509.7775543-.2290368 1.202249-.4557677 2.7920911-.8077772 1.5172177-.3343321 3.1252159-.584889 4.4048256-.5764346 1.8803396 0 3.3075663.1998307 4.2572088.5856576.9512213.4035043 1.4193327 1.0921515 1.4193327 2.0743962.0063151.2336482.0110515.4549991-.0734138.6463754-.0797289.1813848-.2312928.3543152-.6804587.4127272-2.6784182.1575589-4.6021745.3950499-6.923786.724002-2.2868781.3135804-4.2872057.8508176-5.9607237 1.594034-1.783244.7701167-3.1157432 1.802319-4.0338099 3.1073671-.8983318 1.3111967-1.3474977 2.8998507-1.3490765 4.7721105 0 1.7677329.6536193 3.2111254 1.9150729 4.3301772 1.2788204 1.1052174 2.939708 1.6532146 4.9510872 1.6532146 1.2575067-.0084544 2.2403038-.0983782 2.947602-.2682343.697036-.1729304 1.4588024-.4150329 2.2592492-.7539765.603098-.2444083 1.2496128-.5994921 1.9348079-1.0421939.6836163-.444239 1.160411-.7601252 1.771403-1.1482578l.0189455.0361232-.1712988.7347621c-.0015788.0069172-.0110515.0115287-.0110515.019983l.0071045.0115287c-.19577.888478.3497021 1.6247772 1.2519809 1.7100895l.0110516.0169088h.0789395l.0023682.00538c.5999404 0 2.6547363-.0030743 3.6122728-.00538h.6709859c.0449956 0 .0513107-.014603.0655199-.023826.922803-.1129812 1.8021894-.8415946 2.0121685-1.714701l3.4283437-14.4085609c.0773607-.338175.1405124-.729382.1752458-1.179001.0457849-.4573049.0955168-.8300659.0820971-1.0998374.0078939-2.0405787-.8935955-3.5477632-2.6705243-4.516942zM40.47554 38.0339225c-.5849419-1.1082917-1.4682752-2.0006126-2.5852695-2.6954085-1.1454126-.6932588-2.50633-1.1766953-4.081963-1.458764-1.5582663-.2659285-3.410977-.4181073-5.52182-.4227188l-9.821656.0046115c-1.0112154.0169088-2.0034853.7900998-2.2371463 1.7423699L9.6243937 63.1818455c-.2407655.9507329.4160114 1.7431384 1.4090706 1.7377584l4.7126898-.0084544c.9993744.0084544 2.0176944-.7785711 2.2537235-1.729304l1.5929997-6.7896318c.2233989-.9515015 1.2393506-1.7485185 2.2553023-1.734684h1.3396038c5.7483764 0 10.2053022-1.149795 13.3968273-3.4386249 3.1836311-2.3003587 4.7861035-5.317802 4.7861035-9.0707759-.0102621-1.6386117-.2968126-3.0189805-.8951742-4.1142064zm-10.1326778 9.1507082c-1.4067024.9960791-3.38098 1.4956558-5.921254 1.4956558h-1.168305c-1.0104259.0115287-1.6632558-.7839512-1.4232797-1.7377584l1.4082812-5.9380456c.2099792-.9392042 1.2354036-1.738527 2.2316205-1.7308412l1.5432677-.0076858c1.8014001.0076858 3.1488978.3012832 4.0795948.8846351.9149092.5902691 1.3585493 1.5056473 1.3656539 2.7253831.0039469 1.8591939-.7025618 3.2895205-2.1155794 4.308657"/>
                            </svg>
                        </div>

                        <div>
                            <svg viewBox="0 0 64 64" fill="currentColor" class="h-9 text-blue-500">
                                <g id="Layer_2">
                                    <path d="M27.1 24.1l-2.6 15.8h4.1l2.6-15.8h-4.1zM50.8 24.1c-1 0-1.7.3-2.1 1.3L42.6 40h4.3s.7-2 .9-2.4H53c.1.6.5 2.4.5 2.4h3.8L54 24.1h-3.2zm-1.9 10.2c.3-.9 1.6-4.4 1.6-4.4l.5-1.5.3 1.4s.8 3.8 1 4.6h-3.4zM39.4 30.5c-1.4-.7-2.3-1.2-2.3-2 0-.7.7-1.4 2.3-1.4 1.3 0 2.3.3 3.1.6l.4.2.6-3.4c-.8-.3-2.1-.7-3.7-.7-4 0-6.9 2.2-6.9 5.2 0 2.3 2 3.6 3.6 4.3 1.6.8 2.1 1.3 2.1 2 0 1.1-1.3 1.5-2.5 1.5-1.6 0-2.5-.2-3.9-.8l-.5-.3-.6 3.5c1 .4 2.7.8 4.6.8 4.3 0 7.1-2.1 7.1-5.4.1-1.6-1-3-3.4-4.1zM21.1 24.1l-4 10.8-.4-2.2-1.4-7.3c-.2-1-1-1.3-1.9-1.3H6.9c-.1 0-.1.1-.2.1 0 .1 0 .2.1.2 1 .3 1.9.6 2.7 1 .9.4 1.5 1.2 1.8 2.1l3.3 12.4h4.3l6.4-15.8h-4.2z"/>
                                </g>
                            </svg>
                        </div>

                        <div class="italic text-blue-500 font-bold font-titleFont tracking-widest">COD</div>
                    </div>

                    <div class="flex items-center justify-start md:justify-end">
                        <div class="flex items-center w-max bg-white px-4 py-2 rounded-md">
                            <p class="text-sm font-bold mr-2 text-blue-600">32</p>
                            <div class="w-7 h-7 overflow-hidden">
                                <img src="{{ asset('assets/icons/store.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--@CORE (AtCore Tech) attribution-->
        <div class="flex flex-col items-start md:justify-center mt-16 md:mt-12">
            <p class="text-xs font-light tracking-tight text-gray-600 leading-none mb-2">With <span class="text-base animate-ping">💖</span>from</p>
            <a href="https://atcore.tech" target="_blank" rel="nofollow">
                <img class="w-32" src="{{ asset('assets/images/atcore.png') }}" alt="@Core (AtCore)">
            </a>
        </div>
    </div>
</footer>
