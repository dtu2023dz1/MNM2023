<html>

<head>
    <title>Chat</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.2.2/axios.min.js"
        integrity="sha512-QTnb9BQkG4fBYIt9JGvYmxPpd6TBeKp6lsUrtiVQsrJ9sb33Bn9s0wMQO9qVBFbPX3xHRAsBHvXlcsrnJjExjg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="/chatbox/chat.css">
    <link rel="stylesheet" href="/card_slide/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body>
    <div class="container-fluid h-100" id="app">
        <div class="row justify-content-center h-75">
            <div class="col-md-8 col-xl-6 chat">
                <div class="card">
                    <div class="card-header msg_head">
                        <div class="d-flex bd-highlight">
                            <div class="img_cont">
                                <img src="https://dzfullstack.com/assets/images/logo-1.png"
                                    class="rounded-circle user_img">
                                <span class="online_icon"></span>
                            </div>
                            <div class="user_info">
                                <span>Chat with AI</span>
                                <p>DTUDZ</p>
                            </div>
                        </div>
                    </div>
                    <div id="chatbody" class="card-body msg_card_body">
                        <template v-for="(value, key) in list">
                            <div v-if="value.id" class="d-flex justify-content-start mb-4">
                                <div class="img_cont_msg">
                                    <img src="https://dzfullstack.com/assets/images/logo-1.png"
                                        class="rounded-circle user_img_msg">
                                </div>
                                <div class="msg_cotainer">
                                    <p style="white-space:pre-wrap;">@{{ value.message }}</p>

                                </div>
                            </div>
                            <div v-else class="d-flex justify-content-end mb-4">
                                <div class="msg_cotainer_send">
                                    <p style="white-space:pre-wrap;">@{{ value.message }}</p>
                                </div>
                                <div class="img_cont_msg">
                                    <img src="https://static-00.iconduck.com/assets.00/user-icon-2048x2048-ihoxz4vq.png"
                                        class="rounded-circle user_img_msg">
                                </div>
                            </div>
                        </template>
                    </div>
                    <div class="card-footer">
                        <div class="input-group">
                            <input v-model="message" v-on:keyup.enter="sendRequest()" type="text"
                                class="form-control type_msg" placeholder="Type your message...">
                            <div class="input-group-append">
                                <span class="input-group-text send_btn">
                                    <div v-if="check" class="spinner-border text-primary" role="status">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                    <i v-else class="fas fa-location-arrow" v-on:click="sendRequest()"></i>
                                </span>
                                <span v-on:click="startSpeechToTxt()" class="input-group-text send_btn">
                                    <i class="fa-solid fa-microphone"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md- col-xl-6">
                <div class="card__content swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="card__article">
                                <div class="card__data">
                                    <h3 class="card__name">Kell Dawx 1</h3>
                                    <p class="card__description">
                                        Passionate about development and design,
                                        I carry out projects at the request of users.
                                    </p>

                                    <a href="#" class="card__button">View More</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card__article">
                                <div class="card__data">
                                    <h3 class="card__name">Kell Dawx 2</h3>
                                    <p class="card__description">
                                        Passionate about development and design,
                                        I carry out projects at the request of users.
                                    </p>
                                    <a href="#" class="card__button">View More</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card__article">
                                <div class="card__data">
                                    <h3 class="card__name">Kell Dawx</h3>
                                    <p class="card__description">
                                        Passionate about development and design,
                                        I carry out projects at the request of users.
                                    </p>
                                    <a href="#" class="card__button">View More</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card__article">
                                <div class="card__data">
                                    <h3 class="card__name">Kell Dawx 3</h3>
                                    <p class="card__description">
                                        Passionate about development and design,
                                        I carry out projects at the request of users.
                                    </p>
                                    <a href="#" class="card__button">View More</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card__article">
                                <div class="card__data">
                                    <h3 class="card__name">Kell Dawx 4</h3>
                                    <p class="card__description">
                                        Passionate about development and design,
                                        I carry out projects at the request of users.
                                    </p>
                                    <a href="#" class="card__button">View More</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card__article">
                                <div class="card__data">
                                    <h3 class="card__name">Kell Dawx 5</h3>
                                    <p class="card__description">
                                        Passionate about development and design,
                                        I carry out projects at the request of users.
                                    </p>
                                    <a href="#" class="card__button">View More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="/card_slide/scripts.js"></script>
<script>
    new Vue({
        el: '#app',
        data: {
            check: false,
            list: [{
                id: 1,
                message: 'Xin chào, tôi có thể giúp gì không?'
            }, ],
            message: '',
            gender: 'Vietnamese Male',
            lang_: "vi-VI",
            runtimeTranscription_: "",
            transcription_: [],
            header: {
                "Content-Type": "application/json",
                "token": "SxYgrllPv9Avk4Y-xbptJkGU4Bu1knlEvyyOnI5AqytpkBJFICFsDLodP-kTZCdd"
            }
        },
        created() {

        },
        updated() {
            this.scrollToBottom();
        },
        methods: {
            startSpeechToTxt() {
                window.SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;
                const recognition = new window.SpeechRecognition();
                recognition.lang = this.lang_;
                recognition.continuous = false;
                recognition.onspeechend = () => {
                    recognition.stop();
                }

                recognition.onerror = (err) => {
                    console.error(err);
                }

                recognition.onresult = (e) => {
                    console.log('onresult', e);
                    const text = e.results[0][0].transcript;
                    var res = {
                        id: 0,
                        message: text
                    }
                    this.list.push(res);
                    this.speak(text)
                }
                recognition.start();
            },
            speak(text) {
                var payload = {
                    "text": text,
                    "voice": "trinhthiviettrinh",
                    "id": "2",
                    "without_filter": false,
                    "speed": 1.0,
                    "tts_return_option": 2
                }
                axios
                    .post('https://viettelgroup.ai/voice/api/tts/v1/rest/syn', payload, {
                        headers: this.header,
                        responseType: 'arraybuffer'
                    })
                    .then((res) => {
                        var blob = new Blob([res.data], {
                            type: 'audio/wav'
                        });
                        var audioUrl = URL.createObjectURL(blob);
                        var audio = new Audio(audioUrl);
                        audio.play();
                    })
                    .catch((error) => {
                        console.error('Error fetching TTS data:', error);
                    });
            },

            sendRequest(text) {
                console.log(text);
                speak(text);
            },
            async scrollToBottom() {
                $('#chatbody').animate({
                    scrollTop: document.querySelector("#chatbody").scrollHeight
                }, 50)
                await setTimeout(function() {
                    $('#chatbody').scrollTop(document.querySelector("#chatbody").scrollHeight);
                }, 50);
            },
        },
    });
</script>

</html>
