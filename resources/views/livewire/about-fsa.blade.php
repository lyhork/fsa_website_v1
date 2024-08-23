<main>
    <!-- Breadcrumbs -->
		<div class="breadcrumbs overlay">
			<div class="container">
				<div class="bread-inner">
					<div class="row">
						<div class="col-12">
							<h2 class="mef2">{{__('frontend.about-us')}}</h2>
							<ul class="bread-list mef1">
								<li><a wire:navigate href="{{route('home')}}">{{__('frontend.home')}}</a></li>
								<li><i class="icofont-simple-right"></i></li>
								<li class="active">{{__('frontend.about-us')}}</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumbs -->
        <section class="news-single section">
			<div class="container">
				<div class="row">
                    <div class="col-lg-9 col-12">
                        @forelse($abouts as $about)
                        <div class="row">
                                <div class="col-12">
                                    <div class="single-main">
                                        <div class="single-footer f-link mef1">
                                            <p>យោងតាមព្រះរាជក្រមលេខ នស/រកម/០១២១/០០៣ ចុះថ្ងៃទី១៤ ខែមករា ឆ្នាំ២០២១ ដែលប្រកាសឱ្យប្រើ
                                                ច្បាប់ស្ដីពីការរៀបចំ និងការប្រព្រឹត្តទៅនៃអាជ្ញាធរសេវាហិរញ្ញវត្ថុមិនមែនធនាគារ ។
                                                ត្រូវបានបង្កើតអាជ្ញាធរសេវាហិរញ្ញវត្ថុមិនមែនធនាគារ សរសេរជាអក្សរកាត់ថា អ.ស.ហ. ដែលមានឯករាជ្យភាពក្នុងការបំពេញមុខងាររបស់ខ្លួន ដោយ
                                                ធ្វើសមាហរណកម្មយន្តការនៃការគ្រប់គ្រងនិងត្រួតពិនិត្យលើវិស័យហិរញ្ញវត្ថុមិនមែនធនាគារ មានជាអាទិ៍ វិស័យធានារ៉ាប់រងនិងសោធនឯកជន វិស័យ
                                                មូលបត្រ វិស័យសន្ដិសុខសង្គម វិស័យបរធនបាលកិច្ច វិស័យគណនេយ្យនិងសវនកម្ម និងវិស័យអចលនវត្ថុ វិស័យបញ្ចាំ និងប្រាតិភោគដោយអនុប្បទាន ក្នុងគោលបំណងពង្រឹងនិងធានាប្រសិទ្ធភាពនៃការគ្រប់គ្រង ការត្រួតពិនិត្យ
                                                និងអភិវឌ្ឍន៍វិស័យហិរញ្ញវត្ថុមិនមែនធនាគារ រួមទាំងការលើកកម្ពស់ការអភិវឌ្ឍនិងប្រើប្រាស់បច្ចេកវិទ្យាហិរញ្ញវត្ថុលើវិស័យហិរញ្ញវត្ថុមិនមែនធនាគារនៅក្នុងព្រះរាណាចក្រកម្ពុជា ។
                                            </p>
                                            <p>
                                                សមត្ថកិច្ចជាបញ្ញត្តិកររបស់ក្រសួងសេដ្ឋកិច្ចនិងហិរញ្ញវត្ថុពាក់ព័ន្ធនឹងវិស័យហិរញ្ញវត្ថុមិនមែនធនាគារព្រមទាំងសមត្ថកិច្ចជាបញ្ញត្តិកររបស់គណៈកម្មការមូលបត្រកម្ពុជា និងសមត្ថកិច្ចជាបញ្ញត្តិកររបស់ក្រុមប្រឹក្សា
                                                ជាតិគណនេយ្យ ដូចមនាកំណត់ក្នុងច្បាប់និងលិខិតបទដ្ឋានគតិយុត្តពាក់ព័ន្ធ ត្រូវបានផ្ទេរឱ្យស្ថិតនៅក្រោមការទទួលខុសត្រូវរបស់ អ.ស.ហ. ។
                                            </p>
                                            <h2>អ.ស.ហ. មានតួនាទីនិងភារកិច្ចដូចខាងក្រោម៖</h2>
                                            <ul>
                                                <li><i class="fa fa-caret-right mr-3" aria-hidden="true"></i>ជាបញ្ញត្តិករសម្រាប់វិស័យធានារ៉ាប់រងនិងសោធនឯកជន វិស័យមូលបត្រ វិស័យសន្ដិសុខសង្គម វិស័យបរធនបាលកិច្ច វិស័យគណនេយ្យនិងសវនកម្ម និងវិស័យអចលនវត្ថុ វិស័យបញ្ចាំ
                                                    និងប្រាតិភោគដោយអនុប្បទាន ដែលការអនុវត្តតួនាទីរបស់ អ.ស.ហ. នៅក្នុងវិស័យនីមួយៗ ត្រូវកំណត់នៅក្នុងជំពូកទី៣ ផ្នែកទី៣ ផ្នែកទី៤ ផ្នែកទី៥ ផ្នែកទី៦ ផ្នែកទី៧ និងផ្នែកទី៨នៃច្បាប់នេះ
                                                </li>
                                                <li><i class="fa fa-caret-right mr-3" aria-hidden="true"></i>លើកសំណើអំពីគោលនយោបាយនិងយុទ្ធសាស្រ្តអភិវឌ្ឍន៍វិស័យហិរញ្ញវត្ថុមិនមែនធនាគាររួមទាំងបច្ចេកវិទ្យាហិរញ្ញវត្ថុមិនមែនធនាគារជូនរាជរដ្ឋាភិបាល</li>
                                                <li><i class="fa fa-caret-right mr-3" aria-hidden="true"></i>កំណត់ ត្រួតពិនិត្យ និងតាមដានការអនុវត្តផែនការសកម្មភាពសម្រាប់អនុវត្តគោលនយោបាយនិងយុទ្ធសាស្រ្តអភិវឌ្ឍន៍វិស័យហិរញ្ញវត្ថុមិនមែនធនាគារ</li>
                                                <li><i class="fa fa-caret-right mr-3" aria-hidden="true"></i>ពង្រឹងទំនុកចិត្តទីផ្សារ គាំពារវិនិយោគិន និងទប់ស្កាត់ឧក្រិដ្ឋកម្មហិរញ្ញវត្ថុនៅក្នុងវិស័យហិរញ្ញវត្ថុមិនមែនធនាគារ តាមរយៈការចាត់ឱ្យមានការស៊ើបអង្កេត ប្រមូលព័ត៌មានពីគ្រប់
                                                បុគ្គលស្ថាប័នពាក់ព័ន្ធ និងអាចចាត់វិធានការបង្កកទ្រព្យសម្បត្តិឬសាច់ប្រាក់ក្នុងគណនីធនាគាររបស់បុគ្គលពាក់ព័ន្ធក្នុងករណីសង្ស័យប្រព្រឹត្តអំពីល្មើសក្នុងវិស័យហិរញ្ញវត្ថុមិនមែនធនាគារ ដោយអនុវត្តស្របតាមច្បាប់ជាធរមាន
                                                </li>
                                                <li><i class="fa fa-caret-right mr-3" aria-hidden="true"></i>រួមចំណែករក្សានិងពង្រឹងស្ថិរភាពហិរញ្ញវត្ថុ</li>
                                                <li><i class="fa fa-caret-right mr-3" aria-hidden="true"></i>ជំរុញការអភិវឌ្ឍនវានុវត្តន៍ហិរញ្ញវត្ថុ ។</li>
                                            </ul>
                                        </div>
                                        <div class="table-bottom">
                                            <a class="btn mef1" wire:click="download({{$about->id}})">{{__('frontend.doc_download')}} ({{$about->getFileSize()}}MB)</a>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        @empty
                        <div class="col-lg-9 col-12">
                            <div class="row">
                                    <div class="col-12">
                                        <div class="single-main">
                                            <h1 class="news-title mef2">{{__('frontend.null')}}</h1>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        @endforelse
                    </div>
					<div data-aos="fade-left" data-aos-duration="1000" data-aos-offset="200" class="col-lg-3 col-12">
						<div class="main-sidebar">
							<!-- Single Widget -->
							<div class="single-widget category">
								<h3 class="title mef2">{{__('frontend.about-us')}}</h3>
								<ul class="categor-list mef2">
									<li class="{{ Route::is('about-fsa') ? 'active' : ''}}"><a wire:navigate href="{{ route('about-fsa')}}">{{__('frontend.about-fsa')}}</a></li>
									<li><a wire:navigate href="{{ route('institutional-structure')}}">{{__('frontend.institutional-structure')}}</a></li>
									<li><a wire:navigate href="{{ route('manager-profile')}}">{{__('frontend.manager-profile')}}</a></li>
								</ul>
							</div>
							<!--/ End Single Widget -->
						</div>
					</div>
				</div>
			</div>
		</section>
</main>
