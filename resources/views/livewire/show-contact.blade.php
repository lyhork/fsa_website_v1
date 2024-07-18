<main>
    <div class="breadcrumbs overlay">
        <div class="container">
            <div class="bread-inner">
                <div class="row">
                    <div class="col-12">
                        <h2 class="mef2">{{__('frontend.contact-us')}}</h2>
                        <ul class="bread-list mef1">
                            <li><a wire:navigate href="{{route('home')}}">{{__('frontend.home')}}</a></li>
                            <li><i class="icofont-simple-right"></i></li>
                            <li class="active">{{__('frontend.contact-us')}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Contact Us -->
		<section class="contact-us section">
			<div class="container">
				<div data-aos="fade-up" class="inner">
					<div class="row">
						<div class="col-lg-6">
                            @forelse($contacts as $contact)
							<div class="contact-us-left">
								<!--Start Google-map -->
								<div id="myMap">
                                    <iframe src="{{$contact->google_map}}" width="100%" height="100%" style="border:0;" allowfullscreen="true" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
								<!--/End Google-map -->
							</div>
                            @empty
                                <div class="contact-us-left">
                                    <!--Start Google-map -->
                                    <div id="myMap">
                                        <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 1080 1080"><path fill="#e6edfa"
                                            d="M949.88,587.53c-.68,4.6-1.25,7.46-1.39,8.14-13.52,63.73-57.47,117.65-116.37,159.2-1.01.71-2.03,1.42-3.05,2.13-1.17.81-2.35,1.62-3.53,2.4q-12.63,8.58-26.08,16.39c-.3.18-.61.35-.91.52-1.88,
                                            1.1-3.76,2.17-5.66,3.22q-6.18,3.5-12.5,6.78-12.27,6.45-25.02,12.25c-2.18,1-4.37,1.99-6.57,2.95a575.879,575.879,0,0,1-91.99,31.46q-15.57,3.915-31.18,6.93a533.156,533.156,0,0,1-81.7,9.54,546.736,546.736,0,0,1-65.47
                                            -1.68q-13.53-1.14-27.33-2.92c-17.61-2.27-35.44-5.35-53.17-9.28-1.74-.38-3.47-.78-5.21-1.18-2.11-.49-4.21-.99-6.32-1.5q-15.72-3.825-31.2-8.57c-2.2-.66-4.39-1.35-6.57-2.05-.38-.12-.75-.24-1.12-.36-.68-.23-1.37-.45-2.06-.
                                            68-12.95-4.25-25.68-9-38.02-14.27-.73-.31-1.45-.62-2.18-.94q-5.085-2.19-10.07-4.51-15.165-7.05-29.35-15.19-9.255-5.31-17.99-11.12c-1.08-.71-2.16-1.43-3.23-2.16-3.55-2.43-7.03-4.91-10.44-7.47q-5.58-4.155-10.88-8.56c-30.
                                            25-25.09-53.33-55.69-64.95-92.25-1.02-3.23-1.97-6.51-2.82-9.86a216.626,216.626,0,0,1-5.47-72.69c3.94-43.21,20.61-85.41,51.76-111.48,26.14-21.89,60.84-31.06,93.37-34.13.21-.03.43-.04.65-.06,42.17-3.89,80.55,2.43,91.64,4.
                                            46,38.6,7.09,73.58,22.37,131.63,15.84,4.66-.53,20.65-2.45,49.8-10.46.63-.17,1.27-.35,1.92-.53q4.215-1.17,8.22-2.36c82.72-24.37,101.94-51.18,150.84-63.61,3.39-.87,6.91-1.65,10.52-2.36,5.38-1.04,10.98-1.91,16.75-2.56,47.64-5
                                            .37,106.46,3.66,146.3,40.54,39.03,36.13,48.45,88.39,49.18,127.36A275.365,275.365,0,0,1,949.88,587.53Z"/><path fill="#d8dff3" d="M829.07,757c-58.508,40.491-131.245,68.939-203.435,82.906a534.91,534.91,0,0,1-81.706,9.536,549.489,
                                            549.489,0,0,1-65.473-1.677,604.921,604.921,0,0,1-92.028-14.888c-13.1-3.188-26.1-6.841-38.884-10.977-.686-.225-1.377-.445-2.063-.675-12.954-4.254-25.678-9.006-38.021-14.272-.729-.311-1.452-.622-2.176-.938q-5.085-2.194-10.077-4.516c-26.454-12.3-50.9-27.071-71.89-44.5Z"/>
                                            <path fill="#cad4ef" d="M949.884,587.53c-.68,4.6-1.254,7.462-1.4,8.137-27.055,127.6-176.092,215.844-322.851,244.238,0-.5-.017-1.013-.065-1.516-.322-3.424-1.918-6.585-2.684-9.938-3.027-13.142,7.136-25.893,18.66-32.9s24.981-10.731,35.626-19.013c-5.518-4.211-1.157-13,3.82-17.835a116.287,116.287,0,0,1,
                                            41.6-25.924c-2.5-19.528,18.928-37.92,37.844-32.5a20.155,20.155,0,0,1,39.426-5.363,63.208,63.208,0,0,1,5.689-19.747c2.587-5.444,10.688-5.026,12.59.691a.8.8,0,0,0,.037.117c6.274-12.627,26-15.557,35.675-5.3-3.375-12.568,11.765-25.683,23.723-20.551-5.733-8.422-7.286-20.186-1.875-28.823s18.563-12.07,26.
                                            433-5.6c-5.593-9.537,1.452-23.766,12.429-25.1,5.6-.68,11.165,1.479,16.806,1.624A15.276,15.276,0,0,0,939.657,590,16.192,16.192,0,0,1,949.884,587.53Z"/><path fill="#cad4ef" d="M756.922,425.067c0,24.762-35.187,44.895-78.9,45.35-.509.011-1.013.011-1.522.011-3.123,0-6.2-.107-9.225-.3a48,48,0,0,1-60.351,5.3c-.
                                            236-.155-.461-.316-.691-.476.054.326.1.659.139.991v.005a25.037,25.037,0,0,1,.183,3.038c0,11.652-7.79,22.276-20.594,30.306-1.195.756-2.438,1.479-3.718,2.181-9.853,5.416-22.158,9.418-35.884,11.416l0,.006q-2.178.313-4.362.557c-1.205.139-2.416.257-3.626.364h-.006a142.242,142.242,0,0,1-33.467-1.071c0-.006,0-.
                                            006-.006-.006-.316-.048-.626-.1-.942-.15-13.694-2.212-25.9-6.418-35.552-12.032-9.874-5.738-17.079-12.949-20.481-20.99-1.313.048-2.625.085-3.954.085-1.173,0-2.341-.021-3.5-.064a93.793,93.793,0,0,1-14.283-1.58q-1.407-.265-2.78-.579h-.006a71.418,71.418,0,0,1-22.619-9.038,59.981,59.981,0,0,1-5.159,3.927,72.588,
                                            72.588,0,0,1-7.639,4.527c-.9.466-1.822.921-2.765,1.355-1.162.552-2.357,1.077-3.573,1.581h-.011c-2.052.862-4.168,1.655-6.365,2.395h0a121.884,121.884,0,0,1-38.5,5.989h-.461a41.322,41.322,0,0,1-41.081-41.375v-20.2c.215-.027.434-.043.649-.059,42.173-3.89,80.553,2.427,91.643,4.463,38.6,7.082,73.578,22.361,131.63,
                                            15.831,4.662-.525,20.648-2.449,49.8-10.458.632-.171,1.269-.348,1.918-.53q4.211-1.173,8.224-2.358c82.712-24.37,101.939-51.179,150.831-63.613q5.1-1.295,10.522-2.357a43.965,43.965,0,0,1-2.877,18.033c10.982,7.216,18.006,16.393,19.19,26.481A25.118,25.118,0,0,1,756.922,425.067Z"/><path fill="#d8dff3" d="M633.494,443.48s-.
                                            016.054-.043.161c-.236.8-1.35,4.581-3.424,10.677-1.462,4.292-3.4,9.735-5.855,16.1q-1.994,5.184-4.452,11.144a515.891,515.891,0,0,1-38,74.4q-.884,1.431-1.8,2.871c-5.191,8.229-10.8,16.544-16.843,24.827a.029.029,0,0,1-.011.021c-.385.53-.777,1.061-1.168,1.586-.46.627-.927,1.259-1.4,1.886q-.883,1.188-1.779,2.373s0,0-.01.011a363.
                                            716,363.716,0,0,1-42.426,47.23,541.913,541.913,0,0,0-90.014,108.675s0,0,0,.01c-.6.954-1.19,1.908-1.774,2.85C418,758.858,412.314,769,407.434,778.5v.01c-.327.627-.643,1.249-.954,1.865l0,0c-11.037,21.8-17.717,40.164-20.047,52.5-13.1-3.188-26.1-6.841-38.884-10.977-.686-.225-1.377-.445-2.063-.675-12.954-4.254-25.678-9.006-38.021-14.272-.
                                            729-.311-1.452-.622-2.176-.938q-5.085-2.194-10.077-4.516V714.714c26.959-38.777,66.577-82.713,124.6-125.8a22.056,22.056,0,0,0,8.009-23.974c-.011-.043-.027-.091-.037-.134-1.672-5.631-3.74-12.242-6.038-18.751A72.747,72.747,0,0,0,417,535.424a.022.022,0,0,1,0-.011c-.268-.509-.552-1.013-.842-1.511s-.572-1-.873-1.489c0,0,0,0,0-.011a74.117,74.
                                            117,0,0,0-15.971-18.579c-6.862-5.722-15.547-13.3-24.011-21.612l-.038-.037h0c-3.263-3.2-6.493-6.5-9.574-9.858q-4.99-5.352-9.461-11.154-1.606-2.073-3.139-4.206c-4.64-6.568-8.009-12.922-9.209-18.568a33.5,33.5,0,0,0,21.477-4.908l10.244,12.639,8.3,10.243,4.431,5.464a3.877,3.877,0,0,0,4.28,1.291,3.779,3.779,0,0,0,2.5-3.187l.8-8.052.284-2.861.45-4.
                                            49a24.022,24.022,0,0,0,6.418,3.675,36.4,36.4,0,0,0,13.908,2.6q.779,0,1.591-.032c.043,0,.086,0,.128,0h.011a47.538,47.538,0,0,0,9.241-1.334,168.782,168.782,0,0,0,6.011,17.3,79.889,79.889,0,0,0,6.51,12.847,23.814,23.814,0,0,0,5.271,6.054c2.808,2.105,6.826,7.227,11.128,13.468a.005.005,0,0,0,0,.006q.788,1.14,1.581,2.33c2.421,3.6,4.9,7.474,7.264,11.3,3.825,6.166,7.372,12.193,9.992,16.72a6.744,6.
                                            744,0,0,0,9.214,2.465,6.867,6.867,0,0,0,1.446-1.125c1.506-1.543,3.247-3.327,5.176-5.315a.026.026,0,0,1,.011-.016L492.969,534l.006,0c3.172-3.274,6.782-7.024,10.677-11.106l.29-.306c7.3-7.655,15.563-16.447,23.733-25.394q2.651-2.9,5.282-5.818c14.1-15.638,27.2-31.1,33.687-41.171,0,0,.006,0,.006-.011.418-.643.8-1.269,1.167-1.87.413-.68.782-1.333,1.115-1.955.632-.171,1.269-.348,1.918-.53q4.211-1.173,8.224-2.358Z"/>
                                            <path fill="#cad4ef" d="M531.86,594.983c-10.477,2.767-21.31,5.625-31.713,9.3-26.273,9.272-44.826,22.691-55.143,39.882-6.189,10.312-9.386,21.854-11.92,32.79a352.3,352.3,0,0,0-9,71.228.227.227,0,0,0,.419.125q.876-1.422,1.77-2.853l.034-.111a350.122,350.122,0,0,1,8.862-67.906c2.494-10.765,5.634-22.113,11.67-32.17,10.053-16.753,28.228-29.862,54.018-38.964,10.322-3.643,21.112-6.492,31.548-9.248,8.647-2.283,17.518-4.
                                            631,26.212-7.447l.112-.079q.9-1.186,1.782-2.375a.223.223,0,0,0-.252-.345C550.891,589.95,541.245,592.506,531.86,594.983Z"/><path fill="#647cbe" d="M407.434,778.5v.01a.19.19,0,0,1-.021.054c-.3.584-.6,1.173-.9,1.757a.356.356,0,0,1-.038.054l0,0a.213.213,0,0,1-.038.032.226.226,0,0,1-.31-.075q-1.962-3.117-4.163-6.091c-2.636-3.568-6.279-8.052-11.079-11.09a27.446,27.446,0,0,0-22.555-2.764,8.842,8.842,0,0,0-5.689,5.7c-5.
                                            792,17.631-11.77,36.5-15.1,55.813-.686-.225-1.377-.445-2.063-.675,3.627-20.9,10.313-41.215,16.512-60.03l.208-.364.284-.23a29.508,29.508,0,0,1,29.547.75c5.094,3.225,8.9,7.907,11.657,11.625q1.936,2.62,3.713,5.357A.236.236,0,0,1,407.434,778.5Z"/><path fill="#cad4ef" d="M610.752,449.968A272.544,272.544,0,0,1,599.8,481.116h-.006a269.462,269.462,0,0,1-13.832,28.174q-5.521,9.8-11.862,19.126-.956,1.4-1.918,2.8c-4.591,6.675-9.338,13.581-11.609,21.328a40.7,40.7,0,0,0-1.473,13.683.221.221,0,0,0,.021.08.226.226,0,0,0,.3.118q11.226-4.974,22.013-10.779a.239.239,0,0,1,.225,0,.22.22,0,0,1,.07.311q-.884,1.431-1.8,2.871a1.11,1.11,0,0,1-.085.081q-10.022,5.28-20.385,9.831a.23.23,0,0,0-.134.235,55.339,55.339,0,0,0,3.772,14.487.224.224,0,0,1-.011.193.029.029,0,0,1-.011.021c-.385.53-.777,1.061-1.168,1.586a.2.2,0,0,1-.091.075.233.233,0,0,1-.3-.118A58.113,58.113,0,0,1,557.3,569.99a.1.1,0,0,0-.017-.059.22.22,0,0,0-.289-.118,319.269,319.269,0,0,1-68.949,20.824c-1.147.2-2.293.412-3.445.611-10.2,1.8-20.749,3.659-29.342,9.262-12.483,8.144-18.687,22.544-24.687,36.473-2.422,5.626-4.929,11.444-7.827,16.817-9.328,17.305-23.642,31.293-37.491,44.82-11.052,10.8-22.48,21.971-31.309,34.759-6.23,9.032-11.282,19.061-16.168,28.747-5.207,10.329-10.586,21.012-17.438,30.591a85.391,85.391,0,0,1-12.874,14.235c-.729-.311-1.452-.622-2.176-.938a83.2,83.2,0,0,0,13.3-14.54c6.756-9.45,12.1-20.058,17.267-30.312,4.918-9.756,10.007-19.844,16.324-29,8.941-12.96,20.449-24.205,31.571-35.075,13.731-13.415,27.928-27.291,37.1-44.306,2.85-5.287,5.336-11.063,7.742-16.645,6.128-14.224,12.466-28.93,25.484-37.421,8.963-5.845,19.732-7.742,30.141-9.579q1.728-.3,3.434-.611a317.106,317.106,0,0,0,69.234-21,.223.223,0,0,0,.133-.22,42.986,42.986,0,0,1,1.5-15.364c2.368-8.074,7.211-15.124,11.894-21.934q.963-1.4,1.912-2.8,5.232-7.707,9.917-15.74,6.188-10.6,11.378-21.719,1.528-3.27,2.963-6.579h0a271.12,271.12,0,0,0,12.1-33.794.219.219,0,0,1,.279-.15l1.628.461A.228.228,0,0,1,610.752,449.968Z"/><path fill="#cad4ef" d="M498.592,536.758c3.079.28,6.333.5,9.655.5a47.2,47.2,0,0,0,18.3-3.2c7.715-3.23,14.058-9.233,19.654-14.53l14.168-13.407c3.494-3.308,7.455-7.056,9.482-11.935,1.917-4.607,1.9-9.766,1.894-14.314-.024-10-.061-21.272-3.522-31.5a.225.225,0,0,0-.285-.143.221.221,0,0,0-.122.1q-.54.9-1.165,1.87a.226.226,0,0,0-.026.186c2.922,9.492,2.953,19.648,2.977,29.5.01,4.347.022,9.274-1.73,13.486-1.853,4.458-5.638,8.04-8.978,11.2l-14.167,13.408c-5.733,5.422-11.656,11.03-19.009,14.109-8.635,3.615-18.46,3.313-26.932,2.541-1.809-.165-3.708-.367-5.616-.684a.226.226,0,0,0-.2.066l-1.423,1.467a.227.227,0,0,0,.008.32.229.229,0,0,0,.115.058C494.025,536.3,496.374,536.556,498.592,536.758Z"/><path fill="#cad4ef" d="M295.208,747.193a.228.228,0,0,0,.326.205,67.423,67.423,0,0,0,27.653-24.457c2.285-3.628,4.236-7.5,6.123-11.254a114.441,114.441,0,0,1,7.081-12.7c7.859-11.622,20.107-20.15,30.913-27.675l26.085-18.161c7.468-5.2,16.761-11.67,21.127-21.2,5.347-11.667,1.99-24.834-4.637-35.2a.23.23,0,0,0-.316-.067.209.209,0,0,0-.083.1l-1.185.9a.224.224,0,0,0-.133.337c6.238,9.8,9.393,22.15,4.406,33.033-4.125,9-13.15,15.282-20.4,20.332l-26.086,18.161c-10.96,7.631-23.382,16.28-31.463,28.234a115.719,115.719,0,0,0-7.222,12.937c-1.864,3.7-3.791,7.535-6.021,11.076a65.181,65.181,0,0,1-26.042,23.32.224.224,0,0,0-.123.2Z"/><path fill="#cad4ef" d="M430.88,497.508c7.512,7.34,17.5,10.951,27.306,14.277a.227.227,0,0,0,.258-.343q-.8-1.185-1.584-2.328l-.111-.084c-9.158-3.152-17.7-6.532-24.372-13.054-9.191-8.981-12.467-21.51-13.462-35a.224.224,0,0,0-.233-.207c-.574.024-1.136.034-1.69.035a.224.224,0,0,0-.224.225v.016C417.783,475.01,421.192,488.041,430.88,497.508Z"/><path fill="#cad4ef" d="M375.462,492.274q9.035-.548,18.062-.818l.105.022c8.617,4.184,15.027,10.33,18.207,17.552,2.724,6.187,3.148,13.25,3.33,19.385q.057,1.944.085,3.895l.03.1q.892,1.477,1.713,3a.226.226,0,0,0,.424-.107q-.007-3.483-.108-6.957c-.188-6.336-.63-13.645-3.51-20.185-2.862-6.5-8.144-12.161-15.189-16.419a.224.224,0,0,1,.107-.417q2.193-.043,4.383-.071c3.49-.043,6.59.038,9.175,1.434,2.694,1.456,4.535,4.241,6.188,6.969a174.688,174.688,0,0,1,18.409,41.986c1.614,5.582,2.845,11.922-.268,16.612-1.941,2.923-5.33,4.709-8.32,6.284l-.508.268c.013.043.027.089.039.132q.1.333.186.669l1.537.693c3.012-1.589,6.67-3.575,8.851-6.858,3.6-5.419,2.3-12.339.544-18.393a176.76,176.76,0,0,0-18.635-42.5c-1.806-2.979-3.835-6.032-7-7.743-3.035-1.641-6.429-1.738-10.218-1.693q-4.489.054-8.988.179l-.1-.021c-.825-.388-1.661-.766-2.522-1.119-8.139-3.336-16.832-4.805-25.383-5.993l-.2.378q.911.988,1.838,1.97l.13.068a105.561,105.561,0,0,1,19.994,4.492.226.226,0,0,1-.068.437q-6.978.271-13.959.718a.228.228,0,0,0-.211.244.225.225,0,0,0,.066.144q.807.8,1.617,1.6A.227.227,0,0,0,375.462,492.274Z"/><path fill="#cad4ef" d="M768.628,398.28c0,8.706-4.35,16.838-11.888,23.744-14.154,12.97-39.553,21.617-68.537,21.617h-.048c-2.229,0-4.442-.059-6.627-.161-.857-.037-1.7-.085-2.55-.139a48,48,0,0,1-61.037,4.822,26.715,26.715,0,0,1,.321,4.034c0,8.491-4.141,16.436-11.341,23.229-.182.172-.359.343-.546.515h-.006v.005a58.118,58.118,0,0,1-6.573,5.17h-.006q-1.551,1.06-3.2,2.057h0a89.8,89.8,0,0,1-18.215,8.2q-4.034,1.335-8.357,2.4-1.287.323-2.6.611h0a136.347,136.347,0,0,1-29.573,3.166q-5.158,0-10.157-.359c-24.109-1.714-44.89-9.445-57.474-20.443l-.006-.006v-.005a39.245,39.245,0,0,1-10.581-13.961c-1.312.048-2.619.085-3.948.085a91.892,91.892,0,0,1-26.722-3.846,68.106,68.106,0,0,1-16.469-7.415,61.278,61.278,0,0,1-6.038,4.517c-1.087.717-2.217,1.414-3.38,2.083a77.8,77.8,0,0,1-7.152,3.676,96.075,96.075,0,0,1-12.017,4.484q-1.012.3-2.041.594a124.479,124.479,0,0,1-25.63,4.206q-3.873.233-7.763.214a130.88,130.88,0,0,1-17.636-1.178,41.26,41.26,0,0,1-34.962-33.666c42.173-3.89,80.553,2.427,91.643,4.463,38.6,7.082,73.578,22.361,131.63,15.831,4.662-.525,20.648-2.449,49.8-10.458.632-.171,1.269-.348,1.918-.53q4.211-1.173,8.224-2.358c82.712-24.37,101.939-51.179,150.831-63.613q5.1-1.295,10.522-2.357c5.384-1.045,10.988-1.908,16.758-2.556C764.449,381.769,768.628,389.746,768.628,398.28Z"/><path fill="#cad4ef" d="M478.456,847.764c-130.452-10.9-283.137-66.8-320.087-183.019q-1.535-4.837-2.823-9.852a216.818,216.818,0,0,1-5.465-72.689,14.269,14.269,0,0,1,7.945,2.759,13.35,13.35,0,0,0,8.61,2.363c5.936-.445,11.877-3.4,17.738-2.813,11.47,1.136,18.2,18.478,11.867,30.591,8.582-8.406,22.233-4.757,27.515,5.711s3.091,25.158-3.338,35.894c12.815-6.943,28.1,8.626,23.959,24.4,10.65-13.2,31.244-10.5,37.239,4.9.016-.048.032-.1.043-.15,2.271-7.195,10.8-8.095,13.264-1.457a84.948,84.948,0,0,1,5.042,24.258c3.332-11.384,13.977-19.683,23.781-18.541s17.588,11.588,17.4,23.336c20.138-7.629,41.782,14.208,38.235,38.579a107.816,107.816,0,0,1,42.484,30.237c5,5.77,9.167,16.479,3.172,21.976,10.789,9.782,24.761,13.763,36.537,21.927A45.547,45.547,0,0,1,478.456,847.764Z"/><path fill="#e6edfa" d="M411.058,407.525c-33.648-7.246-69.282-21.179-85.846-51.35-5.949-10.835-8.949-24.075-4.576-35.636,5.872-15.525,23.177-23.725,39.6-26.114a97.955,97.955,0,0,1,59.846,10.49c24.938,13.349,44.935,37.852,72.944,41.8,21.426,3.017,42.227-6.89,62.864-13.392s45.882-8.692,61.4,6.391c3.709,3.606,4.328,8.4,4.686,10.357,3.027,16.5-13.317,31.641-19.227,37.117-8.067,7.473-26.8,21.593-85.435,26.322C485.761,416.052,453.589,416.684,411.058,407.525Z"/><path fill="#d8dff3" d="M282.066,536.169H85.185a30.985,30.985,0,0,1,41.164-42.953,47.658,47.658,0,1,1,91.106,23.021C238.967,523.061,260.065,531.411,282.066,536.169Z"/><path fill="#d8dff3" d="M736.994,342.515H842.943A16.675,16.675,0,0,0,820.791,319.4a25.646,25.646,0,1,0-49.028,12.389C760.187,335.461,748.834,339.954,736.994,342.515Z"/><path fill="#d8dff3" d="M724.685,510.182H993.306a42.274,42.274,0,0,0-56.162-58.6,65.024,65.024,0,1,0-124.3,31.41C783.489,492.3,754.7,503.69,724.685,510.182Z"/><path fill="#687ed4" d="M861.356,656.05c-7.85,22.27-33.15,35.8-55.98,30.61h-.01c-10.82-2.46-21.08-9.13-28.66-21.06l2.96,49.21-170.6-1-1.61-34.73-9.14-196.81,43.2.62,127.31,1.83.69.01a56.466,56.466,0,0,1,51.98,36.43l38.89,102.54C864.886,635.55,864.7,646.59,861.356,656.05Z"/><path fill="#536ac5" d="M718.255,531.941l42.792,131.518A29.443,29.443,0,0,1,762.156,677h0a29.437,29.437,0,0,1-26.277,24.873L612.063,713.811l167.607,1L776.706,665.6Z"/><path fill="#ffc1c2" d="M692.764,373.324l-47.592,16.112c-16.575,79.537,17.822,77.793,17.822,77.793l-.7,12.264a25.747,25.747,0,0,0,27.793,27.127h0a25.746,25.746,0,0,0,23.574-27.749l-4.294-52.8,9.214-.749h0a14.018,14.018,0,0,0,12.835-15.108h0q-.062-.76-.192-1.513a16.746,16.746,0,0,0-19.367-13.628l-4.814.837Z"/><path fill="#32477b" d="M629.829,372.48c.645-5.471,5.348-10.163,11.666-12.373-.492-1.584-5.686-19.2,4.706-30.5,5.748-6.25,13.39-7.442,17.213-8.039,23.973-3.741,44.951,16.469,49.139,20.5,5.552,5.35,4.082,5.634,17.539,20.881a45.6,45.6,0,0,1,7.645,11.087,49.932,49.932,0,0,1,3.776,12.577c1.54,10.228-8.134,34-29.808,58.834l-1.632-20.063,8.906-.724.014,0a13.38,13.38,0,0,0,12.357-11.95,16.151,16.151,0,0,0-18.877-17.247,5.85,5.85,0,0,0-4.846,5.511l-.336,7.764a1.509,1.509,0,0,1-1.265,1.423,1.569,1.569,0,0,1-1.628-.9l-8.876-18.081c-.046-.1-.1-.191-.151-.284a4.385,4.385,0,0,0-6-1.587c-7.385,4.293-28.5,8.586-41.995,4.245a27.389,27.389,0,0,1-12.695-8.94C632.555,381.947,629.209,377.743,629.829,372.48Z"/><path fill="#ffc1c2" d="M598.7,459.194s7.242-41.3,23.606-42.968,18.614,18.39,18.614,18.39l-3.31,26.937Z"/><path fill="#ee9c9e" d="M632.387,439.679l2.887,9.553a14.685,14.685,0,0,1,.664,4.366h0a3.046,3.046,0,0,1-2.906,3.043L598.7,459.194l38.91,2.359,2.946-23.972Z"/><path fill="#77bbcb" d="M609.057,415.986a11.357,11.357,0,0,1-8.558,11.06l-84.783,21.772a34.517,34.517,0,0,1-8.508,1.076h-.276a33.891,33.891,0,1,1,8.784-66.716L600.5,404.95a11.432,11.432,0,0,1,8.558,11.036Z"/><path fill="#589fad" d="M607.23,422.217a11.489,11.489,0,0,1-6.731,4.829l-84.783,21.772a34.517,34.517,0,0,1-8.508,1.076h-.276L488.94,419.339l118.265,2.827Z"/><circle cx="507.541" cy="416.226" r="33.682" fill="#9bcfdc"/><circle cx="507.541" cy="416.226" r="27.65" fill="#32477b"/><path fill="#fff" d="M489.21,428.06a1.873,1.873,0,0,1-1.663-1.008,22.983,22.983,0,0,1,8.216-30.173,1.875,1.875,0,1,1,1.984,3.181,19.232,19.232,0,0,0-6.876,25.257,1.877,1.877,0,0,1-1.661,2.743Z"/><path fill="#fff" d="M501.544,438.247c-.048,0-.1,0-.143,0a13.394,13.394,0,0,1-9.588-5.375,1.874,1.874,0,0,1,3.1-2.111,9.566,9.566,0,0,0,6.771,3.747,1.875,1.875,0,0,1-.138,3.744Z"/><path fill="#77bbcb" d="M694.14,415.986a11.357,11.357,0,0,1-8.558,11.06L600.8,448.818a34.517,34.517,0,0,1-8.508,1.076h-.276a33.891,33.891,0,1,1,8.784-66.716l84.783,21.772a11.432,11.432,0,0,1,8.558,11.036Z"/><path fill="#589fad" d="M692.313,422.217a11.489,11.489,0,0,1-6.731,4.829L600.8,448.818a34.517,34.517,0,0,1-8.508,1.076h-.276l-17.992-30.555,118.265,2.827Z"/><circle cx="592.624" cy="416.226" r="33.682" fill="#9bcfdc"/><circle cx="592.624" cy="416.226" r="27.65" fill="#32477b"/><path fill="#fff" d="M574.293,428.06a1.873,1.873,0,0,1-1.663-1.008,22.983,22.983,0,0,1,8.216-30.173,1.875,1.875,0,1,1,1.984,3.181,19.232,19.232,0,0,0-6.876,25.257,1.877,1.877,0,0,1-1.661,2.743Z"/><path fill="#fff" d="M586.627,438.247c-.048,0-.1,0-.143,0a13.394,13.394,0,0,1-9.588-5.375,1.874,1.874,0,0,1,3.1-2.111,9.566,9.566,0,0,0,6.771,3.747,1.875,1.875,0,0,1-.138,3.744Z"/><path fill="#ffc1c2" d="M677.48,429.942l13.362,29.274,42.288-1.034s-27.26-67.26-70.85-59.21C662.28,398.972,683.69,409.322,677.48,429.942Z"/><path fill="#ee9c9e" d="M677.48,429.942l13.362,29.274,42.288-1.034-27.553-3.915a24.8,24.8,0,0,1-18.959-14.016h0a55.181,55.181,0,0,1-4.8-18.039c-1.941-19.517-19.535-23.24-19.535-23.24S683.69,409.322,677.48,429.942Z"/><path fill="#687ed4" d="M739.779,456.937l-48,2.138a3.634,3.634,0,0,0-3.167,5.086l18.606,42.545,58.012-2.727L744.21,459.605A4.673,4.673,0,0,0,739.779,456.937Z"/><rect width="2.5" height="168.32" x="790.782" y="476.185" fill="#536ac5" transform="rotate(-25.344 792.035 560.346)"/><rect width="2.501" height="180.022" x="739.39" y="493.116" fill="#536ac5" transform="rotate(-23.622 740.629 583.121)"/><path fill="#ee9c9e" d="M723.709,412.357c.013-.047,1.168-4.811-1.286-7.486-1.63-1.776-4.573-2.336-8.756-1.667l-.411-2.575c5.108-.814,8.844.022,11.1,2.492,3.4,3.725,1.944,9.627,1.88,9.877Z"/><path fill="#ee9c9e" d="M662.285,479.653A43.914,43.914,0,0,0,688.2,465.179c-7.634,3.254-25.2,2.05-25.2,2.05Z"/><path fill="#ee9c9e" d="M660.261,449.069l-.653-2.256a80.691,80.691,0,0,1,17.737-3.047l.137,2.344a78.237,78.237,0,0,0-17.221,2.959Z"/><path fill="#ee9c9e" d="M713.162,426.447l1.977-1.53c-16.379-21.17-34.735-30.569-53.086-27.174l.455,2.458C684.46,396.145,702.166,412.235,713.162,426.447Z"/><path fill="#687ed4" d="M644.066,467.1l-2.55,15.79-29.88,184.68a32.857,32.857,0,0,1-9.19,17.96,32.807,32.807,0,0,1-23.13,9.59,33.258,33.258,0,0,1-7.29-.82,32.788,32.788,0,0,1-24.89-38.33l38.23-193.03a5.553,5.553,0,0,1,5.79-4.46l48.42,3A4.852,4.852,0,0,1,644.066,467.1Z"/><rect width="1.5" height="58.826" x="613.467" y="438.446" fill="#9aade2" transform="rotate(-84.773 614.22 467.858)"/><rect width="56.683" height="1.5" x="690.198" y="465.769" fill="#9aade2" transform="rotate(-2.687 718.604 466.556)"/><path fill="#9aade2" d="M602.446,685.53a32.807,32.807,0,0,1-23.13,9.59,33.258,33.258,0,0,1-7.29-.82,32.746,32.746,0,0,1-24.61-24.33,33.821,33.821,0,0,1,55.03,15.56Z"/><path fill="#9aade2" d="M861.356,656.05c-7.85,22.27-33.15,35.8-55.98,30.61h-.01a33.85,33.85,0,0,1,33.37-39.29A33.68,33.68,0,0,1,861.356,656.05Z"/><path fill="#9aade2" d="M816.106,510.51a33.847,33.847,0,0,1-47.28-25.79l.69.01A56.463,56.463,0,0,1,816.106,510.51Z"/><rect width="192.461" height="2.501" x="530.013" y="576.02" fill="#536ac5" transform="rotate(-80.811 626.247 577.27)"/><path fill="#77bbcb" d="M785.09,783.82c-49.11,26.39-104.44,45.44-159.46,56.08-10.08,1.96-20.16,3.63-30.18,5l10.47-100.88.15-1.45,2.99-28.76,11.1.07,3,.01,51.87.31h1.41l12.76.08,3,.02,69.6.41h.61l17.26.1.98,12.43Z"/><polygon fill="#5394a5" points="609.063 713.811 780.647 727.237 779.67 714.811 609.063 713.811"/><path fill="#5394a5" d="M689.2,783.36v40.48q-7.35,2.31-14.77,4.41Z"/><rect width="3" height="46.255" x="687.695" y="777.643" fill="#5394a5"/><rect width="3" height="30.016" x="689.195" y="714.231" fill="#5394a5"/><path fill="#5394a5" d="M685.731,735.222a10.311,10.311,0,0,1-7.4-2.7c-5.945-5.662-3.356-18.082-3.244-18.608l2.934.63c-.025.112-2.35,11.308,2.383,15.809,2.089,1.987,5.423,2.389,9.907,1.193l.773,2.9A20.915,20.915,0,0,1,685.731,735.222Z"/><path fill="#5394a5" d="M780.56,747.74a14.58,14.58,0,0,1-10.935-4.439c-8.549-8.865-6.429-27.861-6.336-28.665l2.981.349c-.022.183-2.048,18.4,5.518,26.237,2.58,2.674,5.926,3.805,10.215,3.458l.242,2.99Q781.386,747.741,780.56,747.74Z"/><path fill="#5394a5" d="M608.444,744.273a13.018,13.018,0,0,1-2.667-.288l.613-2.936a7.616,7.616,0,0,0,6.825-1.515c7.331-6.109,6.949-25.492,6.944-25.687l3-.073c.021.856.41,21.039-8.024,28.064A10.179,10.179,0,0,1,608.444,744.273Z"/><path fill="#32477b" d="M170.66,429.007l-.792-4.087c38.046-7.367,64.546-16.405,79.463-23.63a30.655,30.655,0,0,1-9.783-11.973c-2.712-5.946-3.581-13.022-2.737-22.268,1.183-12.958,5.206-22.727,11.956-29.036a25.547,25.547,0,0,1,15.156-6.621c6.08-.487,11.54,1.339,15.375,5.145,5.932,5.887,8.057,15,6.317,27.1-1.436,9.984-6.264,16.853-8.858,20.543a69,69,0,0,1-15.089,14.857q-1.737,1.233-3.869,2.492c9.736,4.661,22.052,5.882,32.56,5.835A303.914,303.914,0,0,0,400.507,385.93l1.543,3.867a305.988,305.988,0,0,1-111.672,21.727c-11.961.057-26.143-1.5-36.965-7.591C235.911,412.916,205.083,422.342,170.66,429.007Zm95.568-93.532a21.544,21.544,0,0,0-14.618,5.58c-5.981,5.59-9.565,14.463-10.653,26.373-.775,8.5-.02,14.9,2.38,20.162a27.173,27.173,0,0,0,10.2,11.551,56.947,56.947,0,0,0,5.724-3.5,66.005,66.005,0,0,0,14.1-13.858c2.393-3.4,6.848-9.743,8.143-18.741,1.542-10.718-.184-18.641-5.129-23.549A14.49,14.49,0,0,0,266.228,335.475Z"/><path fill="#77bbca" d="M438.333,382.405c6.3,5.141,35.98,24.426,53.27-33.773.927-3.123-1.473-5.643-5.067-5.484-15.656.694-46.372,4.878-49.574,35.649A4.12,4.12,0,0,0,438.333,382.405Z"/><path fill="#5394a5" d="M419.9,386.12l-.6-4.12c.3-.045,30.568-4.62,48.729-21.512l2.836,3.048C451.734,381.327,421.186,385.933,419.9,386.12Z"/><path fill="#32477b" d="M803.33,720.747a212.885,212.885,0,0,1-34.171,8.4c-6.778,1.081-13.983,1.819-20.744-.075a27.8,27.8,0,0,1-11.834-6.919,115.336,115.336,0,0,1-28.75,18.347c-10.611,4.868-21.823,8.665-32.665,12.337-11.536,3.906-23.464,7.945-34.58,13.259l-1.557-3.276c11.31-5.405,23.341-9.479,34.976-13.42,10.756-3.642,21.878-7.408,32.32-12.2a114.4,114.4,0,0,0,27.8-17.748,28.566,28.566,0,0,1-6.37-16.381A28.9,28.9,0,0,1,745.819,675.3c3.051-1.164,5.567-1.322,7.692-.478,5.245,2.084,5.964,8.935,4.349,14.8-3.009,10.929-9.278,21.046-18.64,30.082a24.214,24.214,0,0,0,10.153,5.873c5.756,1.613,11.843,1.161,19.21-.014a209.313,209.313,0,0,0,48.828-14.032l1.412,3.34Q811.2,718.109,803.33,720.747Zm-55.574-42.292c-.211.07-.426.148-.646.232A25.207,25.207,0,0,0,731.358,702.9a24.887,24.887,0,0,0,5.409,14.1c7.772-7.5,14.46-16.89,17.617-28.36,1.146-4.16.949-9.205-2.189-10.451A6.516,6.516,0,0,0,747.756,678.455Z"/><path fill="#77bbca" d="M845.37,705.819c6.446,3.1,27.387,10.7,45.437-35.178,1.453-3.694.284-7.149-2.6-7.331-14.025-.887-49.922,1.828-44.92,39.646A3.772,3.772,0,0,0,845.37,705.819Z"/><path fill="#5394a5" d="M832.618,709.848c-3.36,1.127-5.561,1.714-5.881,1.8l-.92-3.509c.293-.077,29.426-7.862,44.453-24.508l2.674,2.441C861.274,699,842.218,706.629,832.618,709.848Z"/><path fill="#32477b" d="M749.056,358.252a5.928,5.928,0,1,1,3.514,7.
                                            8A5.95,5.95,0,0,1,749.056,358.252Zm23.375-29.106c1.257-3.541-.13-6.77-4-8.145a9.829,9.829,0,0,0-6.363,0,3.527,3.527,0,0,1-4.206-1.645l-.032-.062a3.477,3.477,0,0,1,1.934-4.925,18.264,18.264,0,0,1,12.222-.042c7.832,2.781,11.89,9.053,9,17.185-3,8.458-13.462,8.827-17.457,15.791a4.046,4.046,0,0,1-4.868,1.726h0a4.1,4.1,0,0,1-2.15-5.977C760.826,335.911,770.4,334.881,772.431,329.146Z"/></svg>
                                    </div>
                                    <!--/End Google-map -->
                                </div>
                            @endforelse

						</div>
						<div class="col-lg-6">
							<div class="contact-us-form mef1">
								<h2>{{__('frontend.contact-us')}}</h2>
								{{-- <p>If you have any questions please fell free to contact with us.</p> --}}
                                <div class="row mef1">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <h3>{{__('frontend.address')}}</h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <h3>{{__('frontend.phone')}}</h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <h3>{{__('frontend.workDay')}}</h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <h3>{{__('frontend.workingTime')}}</h3>
                                        </div>
                                    </div>
                                </div>
                                <h2>{{__('frontend.followUS')}}</h2>
                                <ul class="social">
									<li><a target="_blank" href="https://www.facebook.com/FSA.Cambodia"><i class="icofont-facebook"></i></a></li>
									<li><a target="_blank" href="https://t.me/fsacambodia"><i class="icofont-telegram"></i></a></li>
									<li><a target="_blank" href="#"><i class="icofont-link"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="contact-info">
					<div class="row">
						<!-- single-info -->
						<div class="col-lg-4 col-12 ">
							<div data-aos="fade-up" class="single-info">
								<i class="icofont icofont-ui-call"></i>
								<div class="content">
									<h3>{{__('frontend.phone-foot')}}</h3>
									<p>info@fsa.gov.kh</p>
								</div>
							</div>
						</div>
						<!--/End single-info -->
						<!-- single-info -->
						<div class="col-lg-4 col-12 ">
							<div data-aos="fade-up" data-aos-delay="150" class="single-info">
								<i class="icofont-google-map"></i>
								<div class="content">
									<h3>{{__('frontend.address-short')}}</h3>
									<p>{{__('frontend.address-long')}}</p>
								</div>
							</div>
						</div>
						<!--/End single-info -->
						<!-- single-info -->
						<div class="col-lg-4 col-12 ">
							<div data-aos="fade-up" data-aos-delay="300" class="single-info">
								<i class="icofont icofont-wall-clock"></i>
								<div class="content">
									<h3>{{__('frontend.DateTime')}}</h3>
									<p>{{__('frontend.ClosedDate')}}</p>
								</div>
							</div>
						</div>
						<!--/End single-info -->
					</div>
				</div>

			</div>

		</section>
	<!--/ End Contact Us -->
</main>