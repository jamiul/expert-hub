<section class="page-section speciality-section bg-white">
    <div class="container">
        <div style="" class="section-title-wrapper text-center mb-40">
            <h2 class="section-title">CHOOSE EXPERTGATE</h2>
            <p class="section-title-lead">Why Choose ExpertGate?</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="tabbable-panel company-speciality-tab" x-data="{tab: 'expert'}">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button x-on:click="tab = 'expert'"
                                    class="nav-link"
                                    :class="tab == 'expert' ? 'active' : ''"
                                    type="button">
                                For Experts
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button x-on:click="tab = 'client'"
                                    class="nav-link"
                                    :class="tab == 'client' ? 'active' : ''"
                                    type="button">
                                For Clients
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show" :class="tab == 'expert' ? 'active' : ''" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="company-speciality-wrapper">
                                <x-why-choose title="Global Recognition">
                                    Joining ExpertGate gives experts the opportunity to showcase their expertise on a global platform, increasing their visibility and recognition within their respective fields.
                                </x-why-choose>
                                <x-why-choose title="Diverse Opportunities">
                                    Experts can explore a wide range of projects and collaborations across various industries and academic disciplines, allowing them to diversify their portfolio and expand their professional network.
                                </x-why-choose>
                                <x-why-choose title="Impactful Contributions">
                                    By offering their expertise through ExpertGate, experts can make meaningful contributions to educational institutions, industries, media outlets, and students, helping to solve real-world challenges and drive positive change.
                                </x-why-choose>
                                <x-why-choose title="Flexible Work Arrangements">
                                    Experts have the flexibility to choose projects that align with their interests, expertise, and availability, enabling them to maintain a healthy work-life balance.
                                </x-why-choose>
                                <x-why-choose title="Secure Payment System">
                                    ExpertGate prioritises the security of experts' payments by holding funds in escrow until project completion, ensuring fair compensation for their services.
                                </x-why-choose>
                                <x-why-choose title="Professional Development">
                                    Through unique training opportunities offered by ExpertGate, experts can enhance their skills in areas such as policy development, course design, and soft skills development, further advancing their careers and expertise.
                                </x-why-choose>
                            </div>
                            <div class="text-center">
                                <a class="btn btn-md btn-primary" style="width: 218px" href="{{ route('auth.expert.registration') }}">Get Started</a>
                            </div>
                        </div>
                        <div class="tab-pane fade show" :class="tab == 'client' ? 'active' : ''" id="profile"
                                role="tabpanel"
                                aria-labelledby="profile-tab">
                            <div class="company-speciality-wrapper">
                                <x-why-choose title="Access to Top Experts">
                                    ExpertGate provides clients with access to a curated network of top academic and industry experts across various fields and disciplines, ensuring that they can find the right expertise to meet their specific needs.
                                </x-why-choose>
                                <x-why-choose title="Tailored Solutions">
                                    Clients can post projects on ExpertGate and receive expressions of interest from experts who are uniquely qualified to address their challenges, allowing for tailored solutions that align with their goals and objectives.
                                </x-why-choose>
                                <x-why-choose title="Empowering Collaboration">
                                    By bridging the gap between academia and industry, ExpertGate empowers clients to collaborate with experts from diverse backgrounds and disciplines, fostering innovation, creativity, and excellence in their projects and initiatives.
                                </x-why-choose>
                                <x-why-choose title="Streamlined Process">
                                    ExpertGate's intuitive user interface makes it easy for clients to navigate the platform, post projects, review proposals, and make informed decisions, saving time and effort in the search for expertise.
                                </x-why-choose>
                                <x-why-choose title="International Perspective">
                                    With a global platform that transcends borders, ExpertGate provides clients with access to an international perspective that can be invaluable in addressing educational challenges and opportunities on a global scale.
                                </x-why-choose>
                                <x-why-choose title="Security and Satisfaction">
                                    ExpertGate holds payments in escrow until project completion, ensuring that clients only release funds when they are satisfied with the outcome of the collaboration, providing peace of mind and security throughout the process.
                                </x-why-choose>
                            </div>
                            <div class="text-center">
                                <a class="btn btn-md btn-primary" style="width: 218px" href="{{ route('auth.client.registration') }}">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>