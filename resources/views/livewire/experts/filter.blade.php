<div class="col-md-4 col-sm-4">
    <div class="left-sidebar">
        <div class="search-block">
            <x-form.search class="input-field-md" wire:model.live.debounce="search" placeholder="Find Expert..."/>
        </div>
        <div class="filter">
            <h5>Filter</h5>
            <button wire:click="resetFilter" class="btn btn-sm btn-link text-decoration-underline px-0 ">
                Clear filters
            </button>
        </div>
        <div class="study-level">
            <h3>Location</h3>
            <x-form.autocomplete class="input-field-md" :searchResults="$countries" selectFunction="selectCountry" removeFunction="removeCountry" :selectedRecords="$selectedCountries" name="country" placeholder="Search by Country"/>
        </div>
        <div class="study-level">
            <h3>Hourly Rate (USD)</h3>
            <div class="d-flex justify-content-between">
                <div style="width: 45%">
                    <x-form.select label="Min" wire:change="filter" wire:model="minimumHourlyRate">
                        <option value="">Select</option>
                        <option value="100">100</option>
                        <option value="110">110</option>
                        <option value="120">120</option>
                    </x-form.select>
                </div>
                <div style="width: 45%">
                    <x-form.select label="Max" wire:change="filter" wire:model="maximumHourlyRate">
                        <option value="">Select</option>
                        <option value="150">150</option>
                        <option value="160">160</option>
                        <option value="200">200</option>
                    </x-form.select>
                </div>
            </div>
        </div>
        <div class="study-level">
            <h3>Experts by Area</h3>
            <div class="accordion" id="acc__1">
                <div class="at-item">
                    <div class="at-title">
                        <h2>
                            <input type="checkbox" id="0">
                            <span for="0">Architecture</span>
                        </h2>
                    </div>
                    <div class="at-tab" style="display: none;">
                        <ul>
                            <li>
                                <input type="checkbox" id="1">
                                <label for="1">Accreditation Documentation</label>
                            </li>
                            <li>
                                <input type="checkbox" id="2">
                                <label for="2">Accreditation Process</label>
                            </li>
                            <li>
                                <input type="checkbox" id="3">
                                <label for="3">Accreditation Renewal</label>
                            </li>
                            <li>
                                <input type="checkbox" id="4">
                                <label for="4">Accreditation Reporting</label>
                            </li>
                            <li>
                                <input type="checkbox" id="5">
                                <label for="5">Accreditation Review</label>
                            </li>
                            <li>
                                <input type="checkbox" id="6">
                                <label for="6">Accreditation Documentation</label>
                            </li>
                            <li>
                                <input type="checkbox" id="7">
                                <label for="7">Accreditation Process</label>
                            </li>
                            <li>
                                <input type="checkbox" id="8">
                                <label for="8">Accreditation Renewal</label>
                            </li>
                            <li>
                                <input type="checkbox" id="9">
                                <label for="9">Accreditation Reporting</label>
                            </li>
                            <li>
                                <input type="checkbox" id="10">
                                <label for="10">Accreditation Review</label>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="at-item">
                    <div class="at-title">
                        <h2>
                            <input type="checkbox" id="0">
                            <span for="0">Art</span>
                        </h2>
                    </div>
                    <div class="at-tab" style="display: none;">
                        <ul>
                            <li>
                                <input type="checkbox" id="11">
                                <label for="11">Accreditation Documentation</label>
                            </li>
                            <li>
                                <input type="checkbox" id="12">
                                <label for="12">Accreditation Process</label>
                            </li>
                            <li>
                                <input type="checkbox" id="13">
                                <label for="13">Accreditation Renewal</label>
                            </li>
                            <li>
                                <input type="checkbox" id="14">
                                <label for="14">Accreditation Reporting</label>
                            </li>
                            <li>
                                <input type="checkbox" id="15">
                                <label for="15">Accreditation Review</label>
                            </li>
                            <li>
                                <input type="checkbox" id="16">
                                <label for="16">Accreditation Documentation</label>
                            </li>
                            <li>
                                <input type="checkbox" id="17">
                                <label for="17">Accreditation Process</label>
                            </li>
                            <li>
                                <input type="checkbox" id="18">
                                <label for="18">Accreditation Renewal</label>
                            </li>
                            <li>
                                <input type="checkbox" id="19">
                                <label for="19">Accreditation Reporting</label>
                            </li>
                            <li>
                                <input type="checkbox" id="20">
                                <label for="20">Accreditation Review</label>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="at-item">
                    <div class="at-title">
                        <h2>
                            <input type="checkbox" id="0">
                            <span for="0">Biology</span>
                        </h2>
                    </div>
                    <div class="at-tab" style="display: none;">
                        <ul>
                            <li>
                                <input type="checkbox" id="21">
                                <label for="21">Accreditation Documentation</label>
                            </li>
                            <li>
                                <input type="checkbox" id="22">
                                <label for="22">Accreditation Process</label>
                            </li>
                            <li>
                                <input type="checkbox" id="23">
                                <label for="23">Accreditation Renewal</label>
                            </li>
                            <li>
                                <input type="checkbox" id="24">
                                <label for="24">Accreditation Reporting</label>
                            </li>
                            <li>
                                <input type="checkbox" id="25">
                                <label for="25">Accreditation Review</label>
                            </li>
                            <li>
                                <input type="checkbox" id="26">
                                <label for="26">Accreditation Documentation</label>
                            </li>
                            <li>
                                <input type="checkbox" id="27">
                                <label for="27">Accreditation Process</label>
                            </li>
                            <li>
                                <input type="checkbox" id="28">
                                <label for="28">Accreditation Renewal</label>
                            </li>
                            <li>
                                <input type="checkbox" id="29">
                                <label for="29">Accreditation Reporting</label>
                            </li>
                            <li>
                                <input type="checkbox" id="30">
                                <label for="30">Accreditation Review</label>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="at-item">
                    <div class="at-title">
                        <h2>
                            <input type="checkbox" id="0">
                            <span for="0">Business</span>
                        </h2>
                    </div>
                    <div class="at-tab" style="display: none;">
                        <ul>
                            <li>
                                <input type="checkbox" id="31">
                                <label for="31">Accreditation Documentation</label>
                            </li>
                            <li>
                                <input type="checkbox" id="32">
                                <label for="32">Accreditation Process</label>
                            </li>
                            <li>
                                <input type="checkbox" id="33">
                                <label for="33">Accreditation Renewal</label>
                            </li>
                            <li>
                                <input type="checkbox" id="34">
                                <label for="34">Accreditation Reporting</label>
                            </li>
                            <li>
                                <input type="checkbox" id="35">
                                <label for="35">Accreditation Review</label>
                            </li>
                            <li>
                                <input type="checkbox" id="36">
                                <label for="36">Accreditation Documentation</label>
                            </li>
                            <li>
                                <input type="checkbox" id="37">
                                <label for="37">Accreditation Process</label>
                            </li>
                            <li>
                                <input type="checkbox" id="38">
                                <label for="38">Accreditation Renewal</label>
                            </li>
                            <li>
                                <input type="checkbox" id="39">
                                <label for="39">Accreditation Reporting</label>
                            </li>
                            <li>
                                <input type="checkbox" id="40">
                                <label for="40">Accreditation Review</label>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="at-item">
                    <div class="at-title">
                        <h2>
                            <input type="checkbox" id="0">
                            <span for="0">Chemistry</span>
                        </h2>
                    </div>
                    <div class="at-tab" style="display: none;">
                        <ul>
                            <li>
                                <input type="checkbox" id="41">
                                <label for="41">Accreditation Documentation</label>
                            </li>
                            <li>
                                <input type="checkbox" id="42">
                                <label for="42">Accreditation Process</label>
                            </li>
                            <li>
                                <input type="checkbox" id="43">
                                <label for="43">Accreditation Renewal</label>
                            </li>
                            <li>
                                <input type="checkbox" id="44">
                                <label for="44">Accreditation Reporting</label>
                            </li>
                            <li>
                                <input type="checkbox" id="45">
                                <label for="45">Accreditation Review</label>
                            </li>
                            <li>
                                <input type="checkbox" id="46">
                                <label for="46">Accreditation Documentation</label>
                            </li>
                            <li>
                                <input type="checkbox" id="47">
                                <label for="47">Accreditation Process</label>
                            </li>
                            <li>
                                <input type="checkbox" id="48">
                                <label for="48">Accreditation Renewal</label>
                            </li>
                            <li>
                                <input type="checkbox" id="49">
                                <label for="49">Accreditation Reporting</label>
                            </li>
                            <li>
                                <input type="checkbox" id="5">
                                <label for="50">Accreditation Review</label>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="collapse" id="collapse01">
                    <div class="at-item">
                        <div class="at-title">
                            <h2>
                                <input type="checkbox" id="0">
                                <span for="0">Computer Programming</span>
                            </h2>
                        </div>
                        <div class="at-tab" style="display: none;">
                            <ul>
                                <li>
                                    <input type="checkbox" id="51">
                                    <label for="51">Accreditation Documentation</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="52">
                                    <label for="52">Accreditation Process</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="53">
                                    <label for="53">Accreditation Renewal</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="54">
                                    <label for="54">Accreditation Reporting</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="55">
                                    <label for="55">Accreditation Review</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="56">
                                    <label for="56">Accreditation Documentation</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="57">
                                    <label for="57">Accreditation Process</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="58">
                                    <label for="58">Accreditation Renewal</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="59">
                                    <label for="59">Accreditation Reporting</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="60">
                                    <label for="60">Accreditation Review</label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="at-item">
                        <div class="at-title">
                            <h2>
                                <input type="checkbox" id="0">
                                <span for="0">Data Analysis</span>
                            </h2>
                        </div>
                        <div class="at-tab" style="display: none;">
                            <ul>
                                <li>
                                    <input type="checkbox" id="61">
                                    <label for="61">Accreditation Documentation</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="62">
                                    <label for="62">Accreditation Process</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="63">
                                    <label for="63">Accreditation Renewal</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="64">
                                    <label for="64">Accreditation Reporting</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="65">
                                    <label for="65">Accreditation Review</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="66">
                                    <label for="66">Accreditation Documentation</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="67">
                                    <label for="67">Accreditation Process</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="68">
                                    <label for="68">Accreditation Renewal</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="69">
                                    <label for="69">Accreditation Reporting</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="70">
                                    <label for="70">Accreditation Review</label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="at-item">
                        <div class="at-title">
                            <h2>
                                <input type="checkbox" id="0">
                                <span for="0">Education</span>
                            </h2>
                        </div>
                        <div class="at-tab" style="display: none;">
                            <ul>
                                <li>
                                    <input type="checkbox" id="71">
                                    <label for="71">Accreditation Documentation</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="72">
                                    <label for="72">Accreditation Process</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="73">
                                    <label for="73">Accreditation Renewal</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="74">
                                    <label for="74">Accreditation Reporting</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="75">
                                    <label for="75">Accreditation Review</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="76">
                                    <label for="76">Accreditation Documentation</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="77">
                                    <label for="77">Accreditation Process</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="78">
                                    <label for="78">Accreditation Renewal</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="79">
                                    <label for="79">Accreditation Reporting</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="80">
                                    <label for="80">Accreditation Review</label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="at-item">
                        <div class="at-title">
                            <h2>
                                <input type="checkbox" id="0">
                                <span for="0">Electronics</span>
                            </h2>
                        </div>
                        <div class="at-tab" style="display: none;">
                            <ul>
                                <li>
                                    <input type="checkbox" id="81">
                                    <label for="81">Accreditation Documentation</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="82">
                                    <label for="82">Accreditation Process</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="83">
                                    <label for="83">Accreditation Renewal</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="84">
                                    <label for="84">Accreditation Reporting</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="85">
                                    <label for="85">Accreditation Review</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="86">
                                    <label for="86">Accreditation Documentation</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="87">
                                    <label for="87">Accreditation Process</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="88">
                                    <label for="88">Accreditation Renewal</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="89">
                                    <label for="89">Accreditation Reporting</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="90">
                                    <label for="90">Accreditation Review</label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="at-item">
                        <div class="at-title">
                            <h2>
                                <input type="checkbox" id="0">
                                <span for="0">Engineering</span>
                            </h2>
                        </div>
                        <div class="at-tab" style="display: none;">
                            <ul>
                                <li>
                                    <input type="checkbox" id="91">
                                    <label for="91">Accreditation Documentation</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="92">
                                    <label for="92">Accreditation Process</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="93">
                                    <label for="93">Accreditation Renewal</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="94">
                                    <label for="94">Accreditation Reporting</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="95">
                                    <label for="95">Accreditation Review</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="96">
                                    <label for="96">Accreditation Documentation</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="97">
                                    <label for="97">Accreditation Process</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="98">
                                    <label for="38">Accreditation Renewal</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="99">
                                    <label for="99">Accreditation Reporting</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="100">
                                    <label for="100">Accreditation Review</label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="at-item">
                        <div class="at-title">
                            <h2>
                                <input type="checkbox" id="0">
                                <span for="0">Environmental Science</span>
                            </h2>
                        </div>
                        <div class="at-tab" style="display: none;">
                            <ul>
                                <li>
                                    <input type="checkbox" id="101">
                                    <label for="101">Accreditation Documentation</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="102">
                                    <label for="102">Accreditation Process</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="103">
                                    <label for="103">Accreditation Renewal</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="104">
                                    <label for="104">Accreditation Reporting</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="105">
                                    <label for="105">Accreditation Review</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="106">
                                    <label for="106">Accreditation Documentation</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="107">
                                    <label for="107">Accreditation Process</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="108">
                                    <label for="108">Accreditation Renewal</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="109">
                                    <label for="109">Accreditation Reporting</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="110">
                                    <label for="110">Accreditation Review</label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="at-item">
                        <div class="at-title">
                            <h2>
                                <input type="checkbox" id="0">
                                <span for="0">Nutrition</span>
                            </h2>
                        </div>
                        <div class="at-tab" style="display: none;">
                            <ul>
                                <li>
                                    <input type="checkbox" id="111">
                                    <label for="111">Accreditation Documentation</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="112">
                                    <label for="112">Accreditation Process</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="113">
                                    <label for="113">Accreditation Renewal</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="114">
                                    <label for="114">Accreditation Reporting</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="115">
                                    <label for="115">Accreditation Review</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="116">
                                    <label for="116">Accreditation Documentation</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="117">
                                    <label for="117">Accreditation Process</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="118">
                                    <label for="118">Accreditation Renewal</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="119">
                                    <label for="119">Accreditation Reporting</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="120">
                                    <label for="120">Accreditation Review</label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="at-item">
                        <div class="at-title">
                            <h2>
                                <input type="checkbox" id="0">
                                <span for="0">Healthcare</span>
                            </h2>
                        </div>
                        <div class="at-tab" style="display: none;">
                            <ul>
                                <li>
                                    <input type="checkbox" id="121">
                                    <label for="121">Accreditation Documentation</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="122">
                                    <label for="122">Accreditation Process</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="123">
                                    <label for="123">Accreditation Renewal</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="124">
                                    <label for="124">Accreditation Reporting</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="125">
                                    <label for="125">Accreditation Review</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="126">
                                    <label for="126">Accreditation Documentation</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="127">
                                    <label for="127">Accreditation Process</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="128">
                                    <label for="128">Accreditation Renewal</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="129">
                                    <label for="129">Accreditation Reporting</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="130">
                                    <label for="130">Accreditation Review</label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="at-item">
                        <div class="at-title">
                            <h2>
                                <input type="checkbox" id="0">
                                <span for="0">History</span>
                            </h2>
                        </div>
                        <div class="at-tab" style="display: none;">
                            <ul>
                                <li>
                                    <input type="checkbox" id="131">
                                    <label for="131">Accreditation Documentation</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="132">
                                    <label for="132">Accreditation Process</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="133">
                                    <label for="133">Accreditation Renewal</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="134">
                                    <label for="134">Accreditation Reporting</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="135">
                                    <label for="135">Accreditation Review</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="136">
                                    <label for="136">Accreditation Documentation</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="137">
                                    <label for="137">Accreditation Process</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="138">
                                    <label for="138">Accreditation Renewal</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="139">
                                    <label for="139">Accreditation Reporting</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="140">
                                    <label for="140">Accreditation Review</label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="at-item">
                        <div class="at-title">
                            <h2>
                                <input type="checkbox" id="0">
                                <span for="0">Humanities</span>
                            </h2>
                        </div>
                        <div class="at-tab" style="display: none;">
                            <ul>
                                <li>
                                    <input type="checkbox" id="141">
                                    <label for="141">Accreditation Documentation</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="142">
                                    <label for="142">Accreditation Process</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="143">
                                    <label for="143">Accreditation Renewal</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="144">
                                    <label for="144">Accreditation Reporting</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="145">
                                    <label for="145">Accreditation Review</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="146">
                                    <label for="146">Accreditation Documentation</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="147">
                                    <label for="147">Accreditation Process</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="148">
                                    <label for="148">Accreditation Renewal</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="149">
                                    <label for="149">Accreditation Reporting</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="150">
                                    <label for="150">Accreditation Review</label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <a class="btn-link fw-medium text-primary" data-bs-toggle="collapse" href="#collapse01" role="button" aria-expanded="false" aria-controls="collapse01">
                    More...
                </a>
            </div>
        </div>

        <div class="study-level">
            <h3>Categories by Expertise</h3>
            <div class="accordion" id="acc__1">
                <div class="at-item">
                    <div class="at-title">
                        <h2>
                            <input type="checkbox" id="0">
                            <span for="0">Accreditation Specialists</span>
                        </h2>
                    </div>
                    <div class="at-tab" style="display: none;">
                        <ul>
                            <li>
                                <input type="checkbox" id="1">
                                <label for="1">Accreditation Documentation</label>
                            </li>
                            <li>
                                <input type="checkbox" id="2">
                                <label for="2">Accreditation Process</label>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="at-item">
                    <div class="at-title">
                        <h2>
                            <input type="checkbox" id="0">
                            <span for="0">Curriculum Experts</span>
                        </h2>
                    </div>
                    <div class="at-tab" style="display: none;">
                        <ul>
                            <li>
                                <input type="checkbox" id="11">
                                <label for="11">Curriculum Experts</label>
                            </li>
                            <li>
                                <input type="checkbox" id="12">
                                <label for="12">Curriculum Experts</label>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="at-item">
                    <div class="at-title">
                        <h2>
                            <input type="checkbox" id="0">
                            <span for="0">Program Designers</span>
                        </h2>
                    </div>
                    <div class="at-tab" style="display: none;">
                        <ul>
                            <li>
                                <input type="checkbox" id="21">
                                <label for="21">Accreditation Documentation</label>
                            </li>
                            <li>
                                <input type="checkbox" id="22">
                                <label for="22">Accreditation Process</label>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="at-item">
                    <div class="at-title">
                        <h2>
                            <input type="checkbox" id="0">
                            <span for="0">LMS Experts</span>
                        </h2>
                    </div>
                    <div class="at-tab" style="display: none;">
                        <ul>
                            <li>
                                <input type="checkbox" id="31">
                                <label for="31">Accreditation Documentation</label>
                            </li>
                            <li>
                                <input type="checkbox" id="32">
                                <label for="32">Accreditation Process</label>
                            </li>
                            <li>
                                <input type="checkbox" id="33">
                                <label for="33">Accreditation Renewal</label>
                            </li>
                            <li>
                                <input type="checkbox" id="34">
                                <label for="34">Accreditation Reporting</label>
                            </li>
                            <li>
                                <input type="checkbox" id="35">
                                <label for="35">Accreditation Review</label>
                            </li>
                            <li>
                                <input type="checkbox" id="36">
                                <label for="36">Accreditation Documentation</label>
                            </li>
                            <li>
                                <input type="checkbox" id="37">
                                <label for="37">Accreditation Process</label>
                            </li>
                            <li>
                                <input type="checkbox" id="38">
                                <label for="38">Accreditation Renewal</label>
                            </li>
                            <li>
                                <input type="checkbox" id="39">
                                <label for="39">Accreditation Reporting</label>
                            </li>
                            <li>
                                <input type="checkbox" id="40">
                                <label for="40">Accreditation Review</label>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="at-item">
                    <div class="at-title">
                        <h2>
                            <input type="checkbox" id="0">
                            <span for="0">Industry Experts</span>
                        </h2>
                    </div>
                    <div class="at-tab" style="display: none;">
                        <ul>
                            <li>
                                <input type="checkbox" id="41">
                                <label for="41">Accreditation Documentation</label>
                            </li>
                            <li>
                                <input type="checkbox" id="42">
                                <label for="42">Accreditation Process</label>
                            </li>
                            <li>
                                <input type="checkbox" id="43">
                                <label for="43">Accreditation Renewal</label>
                            </li>
                            <li>
                                <input type="checkbox" id="44">
                                <label for="44">Accreditation Reporting</label>
                            </li>
                            <li>
                                <input type="checkbox" id="45">
                                <label for="45">Accreditation Review</label>
                            </li>
                            <li>
                                <input type="checkbox" id="46">
                                <label for="46">Accreditation Documentation</label>
                            </li>
                            <li>
                                <input type="checkbox" id="47">
                                <label for="47">Accreditation Process</label>
                            </li>
                            <li>
                                <input type="checkbox" id="48">
                                <label for="48">Accreditation Renewal</label>
                            </li>
                            <li>
                                <input type="checkbox" id="49">
                                <label for="49">Accreditation Reporting</label>
                            </li>
                            <li>
                                <input type="checkbox" id="5">
                                <label for="50">Accreditation Review</label>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="collapse" id="collapse02">
                    <div class="at-item">
                        <div class="at-title">
                            <h2>
                                <input type="checkbox" id="0">
                                <span for="0">Computer Programming</span>
                            </h2>
                        </div>
                        <div class="at-tab" style="display: none;">
                            <ul>
                                <li>
                                    <input type="checkbox" id="51">
                                    <label for="51">Accreditation Documentation</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="52">
                                    <label for="52">Accreditation Process</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="53">
                                    <label for="53">Accreditation Renewal</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="54">
                                    <label for="54">Accreditation Reporting</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="55">
                                    <label for="55">Accreditation Review</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="56">
                                    <label for="56">Accreditation Documentation</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="57">
                                    <label for="57">Accreditation Process</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="58">
                                    <label for="58">Accreditation Renewal</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="59">
                                    <label for="59">Accreditation Reporting</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="60">
                                    <label for="60">Accreditation Review</label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="at-item">
                        <div class="at-title">
                            <h2>
                                <input type="checkbox" id="0">
                                <span for="0">Data Analysis</span>
                            </h2>
                        </div>
                        <div class="at-tab" style="display: none;">
                            <ul>
                                <li>
                                    <input type="checkbox" id="61">
                                    <label for="61">Accreditation Documentation</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="62">
                                    <label for="62">Accreditation Process</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="63">
                                    <label for="63">Accreditation Renewal</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="64">
                                    <label for="64">Accreditation Reporting</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="65">
                                    <label for="65">Accreditation Review</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="66">
                                    <label for="66">Accreditation Documentation</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="67">
                                    <label for="67">Accreditation Process</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="68">
                                    <label for="68">Accreditation Renewal</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="69">
                                    <label for="69">Accreditation Reporting</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="70">
                                    <label for="70">Accreditation Review</label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="at-item">
                        <div class="at-title">
                            <h2>
                                <input type="checkbox" id="0">
                                <span for="0">Education</span>
                            </h2>
                        </div>
                        <div class="at-tab" style="display: none;">
                            <ul>
                                <li>
                                    <input type="checkbox" id="71">
                                    <label for="71">Accreditation Documentation</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="72">
                                    <label for="72">Accreditation Process</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="73">
                                    <label for="73">Accreditation Renewal</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="74">
                                    <label for="74">Accreditation Reporting</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="75">
                                    <label for="75">Accreditation Review</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="76">
                                    <label for="76">Accreditation Documentation</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="77">
                                    <label for="77">Accreditation Process</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="78">
                                    <label for="78">Accreditation Renewal</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="79">
                                    <label for="79">Accreditation Reporting</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="80">
                                    <label for="80">Accreditation Review</label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="at-item">
                        <div class="at-title">
                            <h2>
                                <input type="checkbox" id="0">
                                <span for="0">Electronics</span>
                            </h2>
                        </div>
                        <div class="at-tab" style="display: none;">
                            <ul>
                                <li>
                                    <input type="checkbox" id="81">
                                    <label for="81">Accreditation Documentation</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="82">
                                    <label for="82">Accreditation Process</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="83">
                                    <label for="83">Accreditation Renewal</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="84">
                                    <label for="84">Accreditation Reporting</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="85">
                                    <label for="85">Accreditation Review</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="86">
                                    <label for="86">Accreditation Documentation</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="87">
                                    <label for="87">Accreditation Process</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="88">
                                    <label for="88">Accreditation Renewal</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="89">
                                    <label for="89">Accreditation Reporting</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="90">
                                    <label for="90">Accreditation Review</label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <a class="btn-link fw-medium text-primary" data-bs-toggle="collapse" href="#collapse02" role="button" aria-expanded="false" aria-controls="collapse02">
                    More...
                </a>
            </div>
        </div>

        <div class="study-level study-level-media">
            <h3>Available for</h3>
            <ul>
                <li>
                    <input type="checkbox" id="151">
                    <label for="151">Media Interview</label>
                </li>
                <li>
                    <input type="checkbox" id="152">
                    <label for="152">Keynote Speaker</label>
                </li>
                <li>
                    <input type="checkbox" id="153">
                    <label for="153">Consultation</label>
                </li>
            </ul>
        </div>
        
    </div>
</div>
