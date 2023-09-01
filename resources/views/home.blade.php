@extends('layouts.app')

@section('content')
    <section class="relative isolate">
        <div class="absolute bg-black/50 w-full h-full z-[-1]"></div>
        @include('ui.image', [
            'alt' => 'Septic LOS',
            'css' => 'absolute w-full h-full object-cover object-top transition-all lg:object-center z-[-2]',
            'image' => 'images/services/technical-service.jpg',
             'w' => 1280, 'h' => 900
        ])
        <div class="container text-white pt-16 pb-16 md:pt-24 md:pb-32">
            <h2 class="text-6xl text-[clamp(2rem,5vw,3.75rem)] font-semibold mb-10">Обслуживание, ремонт, установка септиков ЛОС СПб и Ленинградская обл</h2>
            <div class="flex max-sm:flex-col items-center max-sm:space-y-4 sm:space-x-4">
                <a href="#services" class="btn btn-default max-sm:w-full">
                    <span class="mr-2">Услуги</span>
                    <x-heroicon-o-shopping-bag class="w-6 h-6"/>
                </a>
                <a href="@if($Agent->isPhone()) tel:@phone($page->data->phone) @else #callBackForm @endif" class="btn btn-white max-sm:w-full">
                    <span class="mr-2">Обсудить задачу</span>
                    <x-heroicon-o-chat-bubble-left-ellipsis class="w-6 h-6"/>
                </a>
            </div>
        </div>
    </section>

    @php
        $arReasons = [
            (object) [
                "title" => "Профессиональное обслуживание",
                "text" => "Профессиональное сопровождение и ремонт септиков, обеспечивая надежность и эффективность работы вашей системы.",
                "icon" => "heroicon-o-academic-cap"
            ],
            (object) [
                "title" => "Экономичность",
                "text" => "Мы не навязываем лишних услуг, экономим ваше время и деньги.",
                "icon" => "heroicon-o-banknotes"
            ],
            (object) [
                "title" => "Индивидуальный подход",
                "text" => "При обслуживании и ремонте септиков мы учитываем ваши потребности, а также особенности системы.",
                "icon" => "heroicon-o-user-circle"
            ],
            (object) [
                "title" => "Высококачественные материалы",
                "text" => "Мы используем только высококачественные материалы и оборудование при обслуживании и ремонте септиков.",
                "icon" => "heroicon-o-star"
            ]
        ];
    @endphp


    <section class="reasons py-6">
        <div class="container">
            <div class="reasons-grid grid lg:grid-cols-2 gap-6">
                @foreach($arReasons as $obReason)
                    <div class="group reason-item relative overflow-hidden flex max-sm:flex-col max-sm:text-center items-center rounded-3xl shadow-round text-white p-6">
                        <span class="max-sm:mb-4 sm:mr-6 bg-white rounded-full p-4 transition-all group-hover:scale-110">
                            @svg( $obReason->icon, 'w-6 h-6')
                        </span>
                        <div>
                            <h3 class="text-xl font-semibold mb-2">{{ $obReason->title }}</h3>
                            <p>{{ $obReason->text }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    @php


    $arServices = [
        (object) [
            'title' => 'Замена комплектующих',
            'description' => 'Замена деталей и узлов, которые износились или сломались.',
            'time' => '30 минут',
            'price' => 500,
            'priceDescription' => 'cтоимость работы за замену 1 детали',
            'image' => 'images/services/complect.png',
            'options' => ['Текст', 'Текст']
        ],
        (object) [
            'title' => 'Диагноcтичеcкий выeзд',
            'description' => 'Определение неисправностей и причин некорректной работы станции или затопления системы.',
            'time' => '1-2 часа',
            'price' => 2500,
            'priceDescription' => 'cтоимость выезда мастера на аварийную ситуацию. Оценка обьема работ и стоимости обслуживания.',
            'image' => 'images/services/viezd.jpg',
            'options' => ['Текст', 'Текст']
        ],
        (object) [
            'title' => 'Техническое обслуживание',
            'description' => 'Плановое или экстренное обслуживание станции ЛОС.',
            'time' => '2-4 часа',
            'price' => 3500,
            'priceDescription' => 'cтоимость зависит от типа станции',
            'image' => 'images/services/technical-service.jpg',
            'options' => [
                'очистка станции',
                'наладка правильной работы септика'
            ]
        ],
    ];
    @endphp

    <section class="services-list relative" id="services">
        <div class="absolute h-12 bg-white rounded-b-[50%] w-full top-full shadow-lg shadow-black/5 z-[1]"></div>
        <div class="container py-12">
            <header class="mb-6">
                <h2 class="text-3xl text-center font-semibold"><span class="text-primary">Услуги</span> оказываемые нашей компанией</h2>
            </header>
            <div class="grid lg:grid-cols-3 gap-10">
                @each('service.list-item', $arServices, 'obService')
            </div>
        </div>
    </section>

    @php
        $arAbout = [
            (object) [
                'title' => 'Коллективное обращение',
                'text' => 'Вы можете скооперироваться со своими соседями и вызвать мастера на сервис в один день. Это удобно и выгодно!',
                'image' => 'images/index/about/neighbours.jpg'
            ],
            (object) [
                'title' => 'Плановый сервис',
                'text' => 'Плановый сервис - раз в полгода снизит риски переполнения септика из-за закупорки насоса и  профилактирует поломки дорогостоящих запчастей.',
                'image' => 'images/index/about/planovy_service.jpg'
            ],
            (object) [
                'title' => 'Договор на оказание услуг',
                'text' => 'Заключив договор, наши опытные специалисты раз в полгода производят техническое обслуживание и следят за состоянием септика.',
                'image' => 'images/index/about/dogovor.jpg'
            ],
        ];
    @endphp

    <section class="relative bg-[#d5fbdc] pt-24 pb-12">
        <div class="absolute h-12 bg-[#d5fbdc] rounded-b-[50%] w-full top-full shadow-lg shadow-black/5"></div>
        <div class="container">
            <header class="max-w-4xl flex flex-col text-center justify-center mx-auto mb-6">
                <div class="inline-flex mx-auto bg-primary rounded-full text-white text-3xl font-bold px-6 py-2 mb-4">А вы знали?</div>
                <h2 class="text-3xl text-center font-semibold mb-4">При выборе обслуживающей компании <span class="font-bold">очень важно знать что они могут предоставлять</span>.</h2>
                <p class="text-lg font-medium">И вот некоторые факты, о нашей компании:</p>
            </header>
            <div class="grid lg:grid-cols-3 gap-6">
                @foreach($arAbout as $obItem)
                    <div class="bg-white shadow-round rounded-3xl overflow-hidden">
                        @include('ui.image', [
                            'alt' => $obItem->title,
                            'css' => 'h-48 w-full object-cover',
                            'image' => $obItem->image,
                             'w' => 432, 'h' => 192
                        ])
                        <div class="p-6">
                            <h3 class="mb-4 text-2xl font-semibold">{{ $obItem->title }}</h3>
                            <p>{{ $obItem->text }}</p>
                        </div>
                    </div>
                @endforeach
                <div class="flex max-md:flex-col bg-white shadow-round rounded-3xl overflow-hidden lg:col-span-2">
                    @include('ui.image', [
                        'alt' => 'Ответственность персонала',
                        'css' => 'max md:h-full md:max-xl:w-44 max-xl:object-cover max-xl:object-right',
                        'image' => 'images/index/about/emploee.png',
                         'w' => 221, 'h' => 224
                    ])
                    <div class="p-6 py-10">
                        <h3 class="mb-4 text-2xl font-semibold">Ответственность персонала</h3>
                        <p>Наш персонал, занимающийся обслуживанием и ремонтом септиков, обладает всеми необходимыми знаниями, навыками и опытом для выполнения своих обязанностей.</p>
                    </div>
                </div>
                <div class="bg-primary text-white shadow-round rounded-3xl  p-6">
                    <h3 class="text-2xl font-semibold mb-4">Друзья, Будьте внимательны!</h3>
                    <p>При выборе обслуживающей компании внимательно читайте договор на оказание услуг!</p>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-form-section pb-12 pt-24">
        <div class="container">
            <div class="relative rounded-3xl overflow-hidden bg-green-800 isolate">
                <img class="absolute w-full h-full object-cover z-[-1] opacity-40" src="images/index/contact-form/grass.webp" alt="">
                <div class="grid lg:grid-cols-2 gap-10 p-6">
                    <div class="text-white">
                        <h2 class="text-3xl font-semibold drop-shadow mb-4">Закажите обслуживание септика прямо сейчас. Мы свяжемся с Вами в ближайшее время.</h2>
                        <p>Или свяжитесь с нами напрямую:</p>
                        <div class="flex space-x-6 my-10">
                            @foreach($page->data->social as $key => $value)
                                <a target="_blank" href="{{ $value }}" class="group bg-white shadow-round px-10 py-3 rounded-2xl transition-all hover:bg-primary">
                                    @include('ui.image', [
                                        'alt' => $key,
                                        'css' => 'group-hover:brightness-full',
                                        'image' => 'images/social/' . $key . '.svg',
                                         'w' => 30, 'h' => 30
                                    ])
                                </a>
                            @endforeach
                        </div>
                        <div class="flex flex-wrap items-center">
                            <a href="tel:@phone($page->data->phone)" class="text-3xl font-bold transition-all hover:text-blue-400 mr-4 ">{{ $page->data->phone }}</a>
                            <div class="flex items-center">
                                <svg class="mr-3" xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8" fill="none">
                                    <circle cx="4" cy="4" r="4" fill="#20FF87"/>
                                </svg>
                                <p>{{ $page->data->schedule }}</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <form class="bg-secondary/50 p-4 rounded-3xl" id="callBackForm" data-request="{{ route('magic-forms') }}">
                            @csrf
                            <input type="hidden" name="group" value="Обратная связь">
                            <input type="hidden" name="Услуга" value="" id="form-service">
                            <h2 class="text-center text-white text-3xl font-semibold drop-shadow mb-4">Обратная связь</h2>
                            <div class="text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                                <div class="relative">
                                    <input placeholder="Ваше имя" id="name" name="Имя" required class="pl-12 form-control rounded-full">
                                    <div class="absolute left-3 inset-y-0 flex items-center text-green-600">
                                        <x-heroicon-o-user-circle class="w-6 h-6"/>
                                    </div>
                                </div>
                                <div class="relative">
                                    <input placeholder="Ваш телефон" id="phone" name="Телефон" required class="form-control pl-12  rounded-full">
                                    <div class="absolute left-3 inset-y-0 flex items-center text-green-600">
                                        <x-heroicon-o-envelope-open class="w-6 h-6"/>
                                    </div>
                                </div>
                                <div class="relative">
                                    <button class="btn btn-white w-full">Отправить заявку</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @php
        $arFaq = [
            (object) [
                'question' => 'Как часто необходимо проводить техническое обслуживание септика?',
                'answer' => 'Регулярное техническое обслуживание септика крайне важно для его эффективной работы. Рекомендуется проводить его не реже одного раза в год. В случае интенсивного использования септика, частоту обслуживания можно увеличить до двух раз в год.'
            ],
            (object) [
                'question' => 'Какие признаки указывают на неисправности септика?',
                'answer' => 'Самый первичный - мигание лампочки на крышке септика. Также среди типичных признаков проблем с септиком включают запах сточных вод, замедление работы системы, переполнение, или протекания. Если вы заметили подобные признаки, рекомендуем обратиться к специалистам для диагностики и ремонта.'
            ],
            (object) [
                'question' => 'Как можно поддерживать септик в хорошем состоянии?',
                'answer' => 'Есть несколько основных мер, которые помогут поддерживать септик в работоспособном состоянии: регулярно очищайте осадочный сброс и следите за его уровнем; избегайте слива в септик жидкостей с высоким содержанием химических веществ или масел; не выбрасывайте в унитаз санитарные прокладки, влажные салфетки и другие неорганические материалы'
            ],
            (object) [
                'question' => 'Можно ли самостоятельно производить ремонт септика?',
                'answer' => 'Для безопасности и эффективности рекомендуем доверить ремонт септика профессиональным специалистам. Несколько мелких проблем, таких как замена предохранительного клапана, могут быть решены самостоятельно при наличии опыта, но для серьезных неисправностей лучше обратиться к профессионалам.'
            ]
        ];
    @endphp


    <section class="faq py-12">
        <div class="container">
            <div class="max-w-5xl mx-auto">
                <header class="mb-6">
                    <h2 class="text-3xl text-center font-semibold">Часто задаваемые вопросы</h2>
                </header>
                <div class="accordion" data-lazy="accordion">
                    @foreach($arFaq as $obFaq)
                        <div class="accordion-item" itemscope itemtype="http://schema.org/Question">
                            <button class="group accordion-item__button flex justify-between items-center p-4 rounded-full shadow-md w-full mb-4 transition-all {{ $loop->iteration === 1 ? 'active' : '' }}" data-target="#faq_{{ $loop->iteration }}" data-action="toggle">
                                <div itemprop="name">{{ $obFaq->question }}</div>
                                <span class="flex items-center justify-center rounded-full bg-green-600 text-white p-2 group-[.active]:rotate-180 transition-all">
                                <x-heroicon-o-chevron-down class="w-4 h-4"/>
                            </span>
                            </button>
                            <div class="accordion-item__body {{ $loop->iteration === 1 ? 'active' : '' }}" id="faq_{{ $loop->iteration }}" itemprop="acceptedAnswer" itemscope itemtype="https://schema.org/Answer">
                                <div class="bg-white rounded-3xl border p-6 mb-4 shadow-md">
                                    <p itemprop="text">{{ $obFaq->answer }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

@endsection
