<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/lato.css">
</head>
<body>
    <div class="flex flex-col bg-white">
        <!-- desktop header -->
        <div class="hidden md:flex flex-row w-[100%] justify-between">
            <div class="lg:w-[30%] md:w-[20%]">
                <img src="/images/surround.jpg" alt="logo">
            </div>
            <div class="flex flex-row justify-between items-center lg:w-[50%] md:w-[60%]">
                <a href="/" class="font-normal font-lato lg:text-base">HOME</a>
                <a href="#about" id="aboutLink" class="font-normal font-lato lg:text-base">ABOUT US</a>
                <a href="#pricing" id="pricingLink" class="font-normal font-lato lg:text-base">PRICING</a>
                <a href="/gallery" class="text-[#1b998b] font-normal font-lato lg:text-base">GALLERY</a>
                {{-- <a href="/faq" class="font-normal font-lato lg:text-base">FAQ</a> --}}
                <a href="/contact" class="font-normal font-lato lg:text-base">CONTACT US</a>
            </div>
            <div class="flex flex-row md:w-[20%] lg:w-[30%] justify-center items-center font-montserrat font-extrabold md:text-base lg:text-lg">
                <a href="/booking"><div class="bg-[#F4845F] text-white lg:px-8 lg:py-1 md:px-4 md:py-1 lg:ml-44 rounded-2xl">BOOK NOW</div></a>
            </div>
        </div>

        <!-- mobile header -->
        <header  class="flex items-center justify-between p-4 bg-white md:hidden lg:hidden">
            <a href=""><img src="/images/surround.jpg" alt="Logo" class="h-16"></a>
            <button id="menu-btn" class="text-gray-700 focus:outline-none">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 12h18M3 6h18M3 18h18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>                  
            </button>
        </header>

        <nav id="menu" class="hidden flex flex-col items-start p-4 bg-white font-semibold ml-4">
                <a href="/" class="pb-2 font-normal font-lato text-base text-black">HOME</a>
                <a href="/#about" class="py-2 font-normal font-lato text-base text-black">ABOUT US</a>
                <a href="/#pricing" class="py-2 font-normal font-lato text-base text-black">PRICING</a>
                <a href="/gallery" class="py-2 font-normal font-lato text-base text-[#1b998b]">GALLERY</a>
                <!-- <a href="/faq" class="py-2 font-normal font-lato text-base text-black">FAQ</a> -->
                <a href="/contact" class="py-2 font-normal font-lato text-base">CONTACT US</a>
        </nav>
        <!-- /mobile header -->

        <div class="flex flex-col relative w-full">
            <img src="/images/decor.jpg" alt="decor" class="w-full">

            <div class="flex flex-col items-center absolute w-full">
                <p class="lg:text-4xl text-3xl font-lato font-extrabold text-white mt-3 lg:mt-7">Gallery</p>
            </div>

            <div class="flex flex-col items-center w-full">
                <div class="flex flex-col bg-[#1b998b] w-full mx-20 py-10 lg:px-10 lg:py-10 md:px-10 md:py-10 -mt-[160px] md:-mt-[310px] lg:-mt-[670px]">
                    <div class="flex flex-col md:flex-row justify-center items-center space-y-6 md:space-y-0 md:space-x-6 px-4">
                        <svg class="w-full max-w-[calc(100%-16px)]" height="auto" viewBox="0 0 533 651" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="533" height="651" rx="61" fill="#D9D9D9"/>
                        </svg>

                        <svg class="w-full max-w-[calc(100%-16px)]" height="auto" viewBox="0 0 533 651" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="533" height="651" rx="61" fill="#D9D9D9"/>
                        </svg>

                        <svg class="w-full max-w-[calc(100%-16px)]" height="auto" viewBox="0 0 533 651" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="533" height="651" rx="61" fill="#D9D9D9"/>
                        </svg>
                    </div>

                    <div class="flex flex-col md:flex-row justify-center items-center space-y-6 md:space-y-0 md:space-x-3 mt-6">
                        <div class="flex flex-col w-full md:w-2/3 lg:w-8/12 px-4">
                            <svg class="w-full max-w-[calc(100%-16px)]" height="auto" viewBox="0 0 1127 651" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="1127" height="651" rx="61" fill="#D9D9D9"/>
                            </svg>
                        </div>
                        <div class="flex flex-col w-full md:w-1/3 lg:w-4/12 px-4">
                            <svg class="w-full max-w-[calc(100%-16px)]" height="auto" viewBox="0 0 533 651" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="533" height="651" rx="61" fill="#D9D9D9"/>
                            </svg>
                        </div>
                    </div>

                    <div class="flex flex-col md:flex-row justify-center items-center space-y-6 md:space-y-0 md:space-x-3 mt-6">
                        <div class="flex flex-col w-full md:w-1/3 lg:w-4/12 px-4">
                            <svg class="w-full max-w-[calc(100%-16px)]" height="auto" viewBox="0 0 533 651" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="533" height="651" rx="61" fill="#D9D9D9"/>
                            </svg>
                        </div>
                        <div class="flex flex-col w-full md:w-2/3 lg:w-8/12 px-4">
                            <svg class="w-full max-w-[calc(100%-16px)]" height="auto" viewBox="0 0 1127 651" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="1127" height="651" rx="61" fill="#D9D9D9"/>
                            </svg>
                        </div>
                    </div>

                    <div class="flex flex-col md:flex-row justify-center items-center space-y-6 md:space-y-0 md:space-x-6 mt-6 px-4">
                        <svg class="w-full max-w-[calc(100%-16px)]" height="auto" viewBox="0 0 533 651" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="533" height="651" rx="61" fill="#D9D9D9"/>
                        </svg>

                        <svg class="w-full max-w-[calc(100%-16px)]" height="auto" viewBox="0 0 533 651" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="533" height="651" rx="61" fill="#D9D9D9"/>
                        </svg>

                        <svg class="w-full max-w-[calc(100%-16px)]" height="auto" viewBox="0 0 533 651" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="533" height="651" rx="61" fill="#D9D9D9"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <footer class="flex flex-col">
            <div class="flex lg:flex-row md:flex-row flex-col lg:justify-between md:justify-between w-[100%] lg:items-center">
                <div class="flex lg:w-1/2 md:w-1/2 items-center lg:justify-start md:justify-start  justify-between">
                    <img src="/images/surround.jpg" alt="logo">
                    <div class="flex flex-row font-lato lg:items-start md:items-start md:mr-0 lg:mr-0 mr-5 justify-end">
                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="lg:pl-2">
                            <rect width="28" height="28" fill="url(#pattern0_1721_192)"/>
                            <defs>
                            <pattern id="pattern0_1721_192" patternContentUnits="objectBoundingBox" width="1" height="1">
                            <use xlink:href="#image0_1721_192" transform="scale(0.0111111)"/>
                            </pattern>
                            <image id="image0_1721_192" width="80" height="90" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAAFXElEQVR4nO2dbYiVRRSAn9qtXbGyIqklocKiD/rAyh/ShxJWEEVmVGBKlCmF0Vpm2bcQkUlEbAiB1I+C+hGl6Y9MQSmiQoxtNUEIrUQzXXbdPnejzTcOHGFZ9nrnvffMvPPeOw+cP5d755w5970zc86cmQuJRCKRSCQSiUQikXCmBZgKzAdWAmuB7cBuoB/4R6VfX9uu73lVP3O1tpEYg0nAYmA98BuQ1SkDwDqgEzibJmccMA/YBPxn4NxKMgxsBOYC7TQRJ+mTtt+jcyvJIWA5MIEG5gRgKdBXgINHi9iwRG1qKK4DdkTg4NGyC5hJAyBj4irgSAROrSRiWxfQRkk5F/gmAkdmjvItcD4lY6bRMi0LLLIsvIGScAcwGIHTshpFgqF7iJyFntfEWSCRPiwgUmZpcFC0kzJDZ99NZMi4NhSBczIPw8hNRMIFJZ34shwT5OSindymy6KswWVb0evsVRE4IQskEtQUFlbHHPFlxiJ9nR7ayZKM+T5QB/cA7wHPAPcCt2hANBt4GHheE/8DAWyRTYbWkI5eGiCd+RJwcQ6bZFdlGvCOrhZ82fYYgTjZY6rzT2CZbgrUu2PjK5nVqzl17zzpycndHpZRNwMHPNgquWyvyJP2qwfDNxg8xZU4E9hpbO8vvrfF5nlw8hcB9vJkg/ZHY7tlYvbGJmNj9wETCcNFxllF+RV6YZKHzNxtNQ4FV+jGQt76jRcMbZcEWgceWGzs5M9y6D4FeBnYO6oNWTu/C1zi2E6bFt1Y9eERPLDe2NHTHPVe7jC+Dmku3IWnDfuwBmNajSOvnhzDlWv9h6yZ5zi0eY7h+rrfuvxsqvHT/JSj3o9ytiuB1OkO7W417MtVGDLf2NGXefxyXULktwz7cj+GrDQ07DBwnIPONz1Ospbj9CsY8omhYVscdf5cY/t/63r/WLIr1gmxx9Cw1Q76zjDU51skR2OGZfj6ooO+6RE4ME++3AzLtOijDvpmR+DAPGlTMywT6Qsd9N0XgQNdRYKl5GhK5mjLoaPTsX4va8ahw3IyXO64w54142Roubx720HfaRE4sJDl3VpDwz531Lmnjjzx7ipyyLA/H8cagv8BHO+g8/Ua25eEUTWWxRqCWyeVpjjonFJjOlPqQaqxOtakknWa9FlHvR/kbPcvzWFXY4thX67EkBbjxP9OR70dOZNLUiJWjVMNa7nNE//o2WrLp/p6R71SFvZDlbb+BZ4oYBg0nQiP0mns6M05dI/X9fdPo9r4XYcX2RV3QfLgXxn2YRGeilCsz6jcWYMdE9Wx59VQ2WlZACS/orPwxEZjRx/wVRsxBrKXeNDQ9k99GjvX2NGZ/pR91d2NHHq+NLbbZce9ZsZ5qs7c7LEUtl33ES3t3R/i7g9fReg7gAuNbb3UOE9zVB6n5IXog7rVVe/TPUGDokFPaVEZioKwxJOjM5U+zSG41H+MXLrJ+1/zfO7RJZ9uelgo1EUne4H3ged0Mr5VDwvJ5sBD+vqHxhm5SvJd6MNCwrXp+Fs4ugI91VkE8gYF0qbHd7MGl63AiRTM5ECHKbOC5LCG+1Ewo+S3zmQVROpZbiQybm/Ai1HuIlIWNMhVP8PAg0TOrJIPI0MxXvFzrKt/Bko68c2gZMihnK8jcF7mKNtiuNKnnnV2V+QR5BENRgpfJ1uF6z0ROHW0iE3X0GC06omp3ggc3KtZuOAJopCM107uK8DBB3U3XY48Nw3tehXDBs+BzrBupM5ptqvnx6JDD7Cv0eqfep3br20t8lkSUHZatJ7tAWCFVgN1a7lt34i/B+nT17r1PSu04FA+m/4eJJFIJBKJRCKRSCRw5H/vfUOBowzH5AAAAABJRU5ErkJggg=="/>
                            </defs>
                        </svg>
                        2024
                    </div>
                </div>

                <div class="flex lg:flex-row md:items-center lg:items-center md:flex-row flex-col lg:w-1/2 md:w-1/2 md:justify-end lg:justify-end lg:mr-14 lg:ml-0 md:mr-12 md:ml-0 ml-10 lg:mb-0 mb-3">
                    <a href=""><p class="lg:mr-7 md:mr-5 font-lato">Privacy Policy</p></a>
                    <a href=""><p class="font-lato">Terms of Service</p></a>
                </div>
            </div>

            <div class="flex md:flex-row md:items-center lg:flex-row flex-col ml-10 lg:ml-10 lg:items-center mb-5">
                <div class="flex flex-row">
                    <a href=""><svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <rect width="36" height="36" fill="url(#pattern0_1721_189)"/>
                        <defs>
                        <pattern id="pattern0_1721_189" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_1721_189" transform="scale(0.0111111)"/>
                        </pattern>
                        <image id="image0_1721_189" width="90" height="90" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAAE1ElEQVR4nO2cy49URRSHv1nA4Lp14QAmSIyiKI4zSgYlhqWJErc8tiQ+AHfiygkrCRpWDjoRloqS+HZUosQ/wGA0KGIC6hIRMIhxHKaZMpUcksmk7+3XOXWr69aX/JJJZ7rq1C/dp089bkEmk8lkMplMJpPJ1JRhYAuwH/gQOANcAa4DriLNSQw/SUw+tscl1oHjIWAa+KtCQ12X8ua/ATzIALAB+DwC01wfWgA+Ax4gQlYAh4D5CIxySvJjeU3GFgV3Ad9HYIwz0nfA2qpNHgcuRmCGM9ZlYKIqkx8G/o7ABBdIfqxjVaSLPyMYvAusP4A7Q5m8QvKWq6l+AG4JYfShCAbrKtZBa5PvT6yEcz1qXuYMZnwRwSBdJPrEyuRRmTW5hDQHvAiMiPbJa528d8Fquj4dgTFOWd7Ypezr4v2HtU0eHrAFIteh/Kd4KSNdTmSWaxq9JQJTXCCjV3bZxmZNo/dHYIoLlDpe6rKNSU2jP4rAFGegOTG7lx/Dm/pA0+gzFRlxDpgCtknV0wCWiRry2nb5UTpfUYw/ahp9KWDgTeAdYFOXMQ4BjwLHpI1Q8fo1HzW6/Tr1qhPA3QrxrgO+DhTzfyhiHey/wC70eQaYDRC/GpZBXpQNBCseCbCkq4alyfdgzzpjs9WwShfjHfR9B7AH+BI4C/wjOiuv7QZWd9DORsM0ooZFcLva9LkKONphBeH/54jM6sp4tm5Gn2jT39PAtR739ba2aftkXYxutinhXgBu9NG+f+/ekvbvNaizozT67Taf5H5MXmx22Sf7vToYvakkJ/eSLsrSSKvVOc9jqRt9TqbKrTiqPHivtwr68jH8lrLRUyUlnMX6RFO+Ka14M2WjtxW0v8fA5Jt6vqDPHSkbPVrB7vpMQZ9jKRvdKGj/F0Oj/QyyFbelbPTygvY1q42l8m0XbThno9Ez4WodjW4UtJ9Th7LRowVG5x9DZaO3Fxi92zBHP1fQ586UU8fhgvZXG01Y5ksmLNMpG32+ZAp+xMBob2YrfAy/p2y0kyMBrVip/EyMrzZuL+hrs/KYojT6WEk/TyilEL9M+lRJP8frYHRTNkuL2Kuw8O/XTopYr7TmHb3RDviqTX9be0wjPl08WdKuz83fGIwnWqOdHG4pY0TWk5sdVhfTJTnZuoxUwyK4WTnc0o5VstTpH+b/WdYursnfM1InF5Vwi5mQ41u1M9rJoZayfK3FfcYHNdVwxmZvxI6JAKdh1XDGmpXDLZoMSU62ShcmRoc6tntSzl30y3qj6sL82G7Ig+g3gHflSEDRdL0VQzLjO25QJwc7iF7VoxW/ym71Dtnja8gujdet8tpOKe00jw9U9mhFqg8LOQW9r2l0qo+/OQW9rGl0qg90OgX53xI1huVeuKoH5SLTJXkUTxXNI1QuEb2OASleI+H60ILlJYQzEQzQRSJfiZkuzlR5gauLRPMhrtR8NYKBuop1gAD4CuRUBIN1FenbkFcgr5XL9lzNdAFYQ2DGa3Zl5lW5F7sSxmryyb5QpcmL08ipxHPyGiJhWK6RTKn0uw68on0LmOaVmp8O+AxyAfhYaafHnA3yqNvlCIxzXSwQTVnfOWrFMtlempQF8tMyoFB7kK00JzGclpgmJUb1VbhMJpPJZDKZTCaTYRD4Hy2WYZFuOgQHAAAAAElFTkSuQmCC"/>
                        </defs>
                    </svg></a>

                    <a href=""><svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <rect width="36" height="36" fill="url(#pattern0_1721_190)"/>
                        <defs>
                        <pattern id="pattern0_1721_190" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_1721_190" transform="scale(0.0111111)"/>
                        </pattern>
                        <image id="image0_1721_190" width="90" height="90" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAACNklEQVR4nO2csWpUQRSGv8rIggRtk8pGISBi5xuks/AVLE1SiY9gnVorQXwFO8UimkqtRHtbRQxo5ZELt0i3E3funNm73wen3J1zvvw7O3chAyIiIiIiIiIiMnAZOAJOgTMgZlpnwHvgENhq/affBT51ICEa18dx9mZJ3kTJcU52k2QfdTBsJNdBC9GnHQwayfWuhehfHQwayTU4mJzsIaOTUjSKJjuFJpp8cW4d5Et1j0bR6Yn7DjwHHgC3gR1gMR4VrgLXgOvAHrAPvDTRXFjwI+DKBc9fw2vcOiiT8AW4+Z8HXEVTJvkrsL3CU4SiWS75D3BnBcmKpizNxytKVjTLJf8Fbih6+mPc2wqSTTTLRT9RdJsHk3uFou8Cr8Zzdo11Jyc6q72Cnocnw9+V152c6Kx2Cnp+McG6kxOd1aKg58+KpkmyfiiaJqKn+CRNTvZWEYpWdFWyExwmeg33wXM866233tJaize99TZX0d96622Oohfjz61d9TZH0bd67G2Oou/32NscRT/usbc5in7aY29zFP1600VHpYHXMgTZYkPRiq5KdoLDRCu6KtkJDhOt6KpkJzhMtKKrkp3gMNGKrkp2gsNEK7oq2QkOE63oqmQnOEy0oquSneAw0YquSnaCw0QretbXsZVQe82fbOAFgyWs5QWDhx3IjWTRD2nA1ngR6qaK/gBcohG7Hckuoabkkn8grZ7sg3G/yvyCLGGV9x9mOxm3i2ZJFhERERERERGhY/4BzWMTzORFMuAAAAAASUVORK5CYII="/>
                        </defs>
                    </svg></a>
                </div>

                <p class="lg:mb-3 font-lato"><strong>Stay in the Loop</strong> - Get updates on promotions and new features follow us on socials.</p>

            </div>
        </footer>
    </div>

    <script src=/js/surround.js></script>
    
</body>
</html>