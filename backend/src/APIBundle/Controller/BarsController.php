<?php

namespace APIBundle\Controller;

use APIBundle\Exceptions\GoogleApiException;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\Annotations\QueryParam;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\View\View;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use Symfony\Component\HttpKernel\Exception\HttpException;

class BarsController extends FOSRestController
{
    /**
     * @Rest\Get("/bars")
     * @ApiDoc(
     *  description="Returns a collection of Bars located within 2km radius around position, by default it is Neptune's Fountain at Gdańsk",
     *  section="BarsApi"
     * )
     * @QueryParam(name="position", description="latitude and longitude separated by comma")
     * @param null|string $position
     * @return View
     */
    public function indexAction(string $position = null) : View
    {
        try{
//            $barsApi = $this->get('api.services.bars_api');
//            return new View($barsApi->getBars(), 200);
        }
        catch(GoogleApiException $e) {
            throw new HttpException(503, "503: Service Unavailable");
        }

        return  new View(json_decode($this->json, true), 200);
    }

    public $json = <<<DDFDFDF
[
  {
    "geometry": {
      "location": {
        "lat": 54.352095,
        "lng": 18.650461
      },
      "viewport": {
        "northeast": {
          "lat": 54.35213084999999,
          "lng": 18.65059885
        },
        "southwest": {
          "lat": 54.35206664999999,
          "lng": 18.65041305
        }
      }
    },
    "icon": "https://maps.gstatic.com/mapfiles/place_api/icons/generic_business-71.png",
    "id": "2a293ddb8ddfdc1d65274d12c8465e50a3fe68ef",
    "name": "Cafe Szafa",
    "opening_hours": {
      "open_now": true,
      "weekday_text": []
    },
    "photos": [
      {
        "height": 639,
        "html_attributions": [
          "<a href=\"https://maps.google.com/maps/contrib/103611858263780846217/photos\">Cafe Szafa</a>"
        ],
        "photo_reference": "CoQBdwAAAKScFy_r7W7d3DrivQBC22-URBOjqsaV3sJW0QgEd4mvBBVVi1sMHH4_inYw5xouTgd-ip_3jRrrWOac0C0dnV0siNno4s1xzFcGXG_Q9Ye60aszBGWhC_kcBRyAU9bMtz1Lc29_n4e9JK3gIgPg85w8ERfsBatU7_4V4gryAgAyEhDGoASSkgQ5b_BZSPzkBzJZGhSTzwrsMRnGw4JbLTqv3XEwp76Ifw",
        "width": 960
      }
    ],
    "place_id": "ChIJkaVEf3Vz_UYRQdJXi93rMuo",
    "rating": 4.2,
    "reference": "CmRSAAAAr2sEJH0aC6IPFpdRBNcVNVNDmp9JGt2Kw6-4gMxteJnB1kVwjCdbwlnv-39ZCXE6xi2vAiuAVFyOONH8cWXqF5Pc32V5F9Z_8iB7pxcb9jngcH5NnVF2ESJymzuPxABfEhDG1YydXl8gZjIPhHBr7DwpGhQSDx3LxbNagRe3Qxafx9wcUGYU5A",
    "scope": "GOOGLE",
    "types": [
      "bar",
      "point_of_interest",
      "establishment"
    ],
    "vicinity": "Podmurze 2, Gdańsk"
  },
  {
    "geometry": {
      "location": {
        "lat": 54.3488096,
        "lng": 18.6545734
      },
      "viewport": {
        "northeast": {
          "lat": 54.3489167,
          "lng": 18.6546295
        },
        "southwest": {
          "lat": 54.3487739,
          "lng": 18.6545547
        }
      }
    },
    "icon": "https://maps.gstatic.com/mapfiles/place_api/icons/bar-71.png",
    "id": "ac6dc9a25540ab0c140d064bf760e9590ba06680",
    "name": "Flisak '76",
    "opening_hours": {
      "open_now": true,
      "weekday_text": []
    },
    "photos": [
      {
        "height": 1363,
        "html_attributions": [
          "<a href=\"https://maps.google.com/maps/contrib/114345491031044239774/photos\">Flisak &#39;76</a>"
        ],
        "photo_reference": "CoQBdwAAAEzxTDjvsz9PnU1dX8do61mbQtnFvvDWbLGv5zbpygSLz4WnmtV_Fy_72OYAdQj6Ky7IVPohMzL1pyM4a4zt5OB9BufarPkKV4tiZxhK6bONex-HAPOtHFpzCTdwQob8v60oHm5SNP8FSwnExKjw5T2Lsx7OmkahpQIap2VMi0LpEhCXAwo92PuIodQQ8nS3YogpGhTP55qeOzoHPFi_YGC6oO2VQTFgcQ",
        "width": 1382
      }
    ],
    "place_id": "ChIJgR05NqBz_UYRiSvNTd7JUzk",
    "rating": 4.6,
    "reference": "CmRRAAAA5lyvtozPIxtPzBQjAP3gpCP65_JQ1i583U5e-WbYe02y0WcaKOwr3yIO1UYc6lZFUw2B_bRqjVE90GZXNytf8_yjPNcEe8FIkmAxMuEwse1SGbUW8ynODXzwk7Vicz8AEhAeSLWdh5u_KWqEwmmVgNZQGhSmnIv2Bw91xDNSdwnJVnnZXC69Qw",
    "scope": "GOOGLE",
    "types": [
      "art_gallery",
      "night_club",
      "bar",
      "point_of_interest",
      "establishment"
    ],
    "vicinity": "Chlebnicka 9, Gdańsk"
  },
  {
    "geometry": {
      "location": {
        "lat": 54.3545683,
        "lng": 18.6546463
      },
      "viewport": {
        "northeast": {
          "lat": 54.35459665,
          "lng": 18.6549619
        },
        "southwest": {
          "lat": 54.35455885,
          "lng": 18.6545411
        }
      }
    },
    "icon": "https://maps.gstatic.com/mapfiles/place_api/icons/generic_business-71.png",
    "id": "57e8ef4008ca41c4da98042bab4bcfab359e6375",
    "name": "Klubogaleria Bunkier",
    "opening_hours": {
      "open_now": true,
      "weekday_text": []
    },
    "photos": [
      {
        "height": 533,
        "html_attributions": [
          "<a href=\"https://maps.google.com/maps/contrib/101531473423476121349/photos\">Klubogaleria Bunkier</a>"
        ],
        "photo_reference": "CoQBdwAAALFUgk0VJUHX_c8o9UqSspOH82QbHlAopOybuxOe81R_lnudUi8EjvFe5OQun-AM4SJdEPzlRTRmTAqKjzLaDSldiKJMK50E7vx7x0KBlXVFhiFx0LkxHHOmuLbg_HS6OrUfJwC_3qiTTRJPxcb01FlIFcptyzz1oQlH8uft0z2zEhBVpsPH2nTiRq7ls_1_NkXuGhRJDiE_yQbW1rqD7LYAHHJBstieow",
        "width": 533
      }
    ],
    "place_id": "ChIJx8lP3HRz_UYRDrGAU6E7FF8",
    "rating": 4,
    "reference": "CmRRAAAAA5t1LCUEaivcHoq0cv3xQfq6aRjiYcaN2QLgIqTHUkaFPs9y-6eWJirKXaTJ910JK3MC2th2p_Sxx_d6bYnrqhblsHDyj1nAz5-08jE_NT4XGbCyHEdfznMD_HgJJjwREhAkp5N6iYrZjrFuY6JpD1WyGhQfvDbAk0RZ7_KHWKMBN4WyagUv7g",
    "scope": "GOOGLE",
    "types": [
      "art_gallery",
      "night_club",
      "bar",
      "restaurant",
      "food",
      "point_of_interest",
      "establishment"
    ],
    "vicinity": "Olejarna 3, Gdańsk"
  },
  {
    "geometry": {
      "location": {
        "lat": 54.353305,
        "lng": 18.6496782
      },
      "viewport": {
        "northeast": {
          "lat": 54.35332035,
          "lng": 18.6500712
        },
        "southwest": {
          "lat": 54.35329694999999,
          "lng": 18.6495472
        }
      }
    },
    "icon": "https://maps.gstatic.com/mapfiles/place_api/icons/generic_business-71.png",
    "id": "0b8c1c500ea294aeab07978ec68505729e438e2e",
    "name": "LOFT",
    "opening_hours": {
      "open_now": true,
      "weekday_text": []
    },
    "photos": [
      {
        "height": 667,
        "html_attributions": [
          "<a href=\"https://maps.google.com/maps/contrib/103380870555989991226/photos\">LOFT</a>"
        ],
        "photo_reference": "CoQBdwAAAMn0emMA409NxsvcG-6RXzlFDGFU7QELKTNENXVtLY4w7_0typ3m8M6HReiJLnOrxmUXGlBLpo2xuCFoj2QhYJMoxbWZCvv5YSNjCkaInSlIP76xlRiy0QwjOnzo8rK1UnuSezFBdpR2Fr2MyoH1PYEc-WiK8Gkzi1Dv6hi6HcR9EhAXWc0siuYBbz6raQXxlgHbGhQCjF77zdHYnte5Eg2a5hcqoIrJfA",
        "width": 1000
      }
    ],
    "place_id": "ChIJHcEmlnVz_UYRoWymWwYWfzA",
    "rating": 4.7,
    "reference": "CmRRAAAA-vqRl9HNFDH2iQD2dWsy5UxR0DT-4jmKMig0JsoP52XxpF2RGUWSKIBWAUkMBzeTRtixd6ZulTomaFDlZM-c7dYR_QWEUdOyQoE46nkDDhVYLu-k0fP2K7e6Ts7leg22EhDFu6u12lVlASfYkqzt2fYFGhQbv_NvJD8ZaYIiIVxD_qScAf_gRw",
    "scope": "GOOGLE",
    "types": [
      "bar",
      "point_of_interest",
      "establishment"
    ],
    "vicinity": "Młyńska 15, Gdańsk"
  },
  {
    "geometry": {
      "location": {
        "lat": 54.3539379,
        "lng": 18.6482064
      },
      "viewport": {
        "northeast": {
          "lat": 54.35397930000002,
          "lng": 18.64841715
        },
        "southwest": {
          "lat": 54.35392409999999,
          "lng": 18.64813615
        }
      }
    },
    "icon": "https://maps.gstatic.com/mapfiles/place_api/icons/bar-71.png",
    "id": "0f94d73a574a1bde8cbe06e1f7df5003c2c66baf",
    "name": "Irish Pub",
    "photos": [
      {
        "height": 4160,
        "html_attributions": [
          "<a href=\"https://maps.google.com/maps/contrib/112458963150619410066/photos\">Lucy Fischer</a>"
        ],
        "photo_reference": "CoQBdwAAAD2L2pDcwG2iYBh7TwXZejX1SCx16AYj7DkSzPKUFiPpZ_FQMtKYenMMnmFzkvkO8JXLScJ3S3WH89Sagdf4ltdzeIwgXVmvm6UqTO72AhnBXh0k7FeGkYhAIVNL1UxwSq0mpjSZcZqRubZj0pOwTnGB83Lh09GYRTCnLLFLSS0GEhAfNPyAzjPWJwnWNJePYvedGhRfLsWohSClhns_hD21ZBNlJZmf_w",
        "width": 3120
      }
    ],
    "place_id": "ChIJw_Jv3HVz_UYRSjRyXDhc1H0",
    "rating": 3.2,
    "reference": "CmRRAAAAytNJE4qzLD_4nfQmVn6UCt9VEMbKPs5vLVu3zjdOYGB7oPYZH0CvmUD0QVCzGk78BuFhPlgS6DxVwfw3CGv9TyVWDXQHlbqkLd9A2tKdTFOfIJZnJ4CUdOQZfDlEQPThEhAD3K09v_1rMrnyW0ChV5Z0GhSMN3AV4J5KTkEa4SQr4SLynRr1pA",
    "scope": "GOOGLE",
    "types": [
      "bar",
      "restaurant",
      "food",
      "point_of_interest",
      "establishment"
    ],
    "vicinity": "Korzenna 33/35, Gdańsk"
  },
  {
    "geometry": {
      "location": {
        "lat": 54.35409,
        "lng": 18.6595943
      },
      "viewport": {
        "northeast": {
          "lat": 54.35412240000001,
          "lng": 18.6597722
        },
        "southwest": {
          "lat": 54.3540028,
          "lng": 18.659535
        }
      }
    },
    "icon": "https://maps.gstatic.com/mapfiles/place_api/icons/bar-71.png",
    "id": "001663f1cfeef7d5008e00587f69de07402484c9",
    "name": "Degu-Degustatornia",
    "opening_hours": {
      "open_now": true,
      "weekday_text": []
    },
    "photos": [
      {
        "height": 2304,
        "html_attributions": [
          "<a href=\"https://maps.google.com/maps/contrib/103360122194969849293/photos\">Marek Adamkiewicz</a>"
        ],
        "photo_reference": "CoQBdwAAAKWn0aGCRZqW4toQChsOFjz46PG8AiLjltn3lyrczATbEBuY0JAkAEmxrKRVJ1YIermVQQYNp5ubzTmYNc93kji0GTsf4bfZl86NWSMpcxyTfuxGfMHLOlN1-CyqQ7YHKOzp82ye0HHAJmpMCpWVRUXWjGBgGrnSD60kWgDf-AtgEhCn-KQCTjljgiMopTbJQMLqGhSeS3SIXS3AIlTlqe3v22M0hyHt8w",
        "width": 4096
      }
    ],
    "place_id": "ChIJXbLbEQtz_UYRksRm0i4pryY",
    "rating": 4.3,
    "reference": "CmRRAAAAumYheAd7ll8xEJXnLJjE-gXr_fH5jxS2K5I6fICDA3XpUB4YFZvn5YzPTvGCJELVIWlkagAiAXWUQcRpJ8PheUX_2J7VPwUS740PM1z1JGMOjlVKRBnxPji6U4ZKutXAEhDd0qTxbu2OZNLRlw_8v5SQGhSfeBfLU4nFqnb9PUMKJFnBWQrtjA",
    "scope": "GOOGLE",
    "types": [
      "bar",
      "liquor_store",
      "store",
      "point_of_interest",
      "establishment"
    ],
    "vicinity": "Grodzka 16, Gdańsk"
  },
  {
    "geometry": {
      "location": {
        "lat": 54.3488323,
        "lng": 18.65159079999999
      },
      "viewport": {
        "northeast": {
          "lat": 54.34904305,
          "lng": 18.65162624999999
        },
        "southwest": {
          "lat": 54.34876204999999,
          "lng": 18.65148445000001
        }
      }
    },
    "icon": "https://maps.gstatic.com/mapfiles/place_api/icons/restaurant-71.png",
    "id": "e875f25de22e11f9dd1174abbabd5891c4099709",
    "name": "Bar Mleczny NEPTUN",
    "opening_hours": {
      "open_now": false,
      "weekday_text": []
    },
    "photos": [
      {
        "height": 3180,
        "html_attributions": [
          "<a href=\"https://maps.google.com/maps/contrib/117704098589910216033/photos\">Krzysztof Walencik</a>"
        ],
        "photo_reference": "CoQBdwAAABXOb1J9exU-nQZofqw8nZ7bZEqmu32llXBx9FUkAT0Mkfej3JiDYITqf5jSJCsOxzYk3dsHPdO61s9HPRm1mQEVLto6_8Xk2cb1WA-SVpgXeq034vlPpWUViPecotsBUAxDAUDmqElvhtuvWQF4mjYheFMdGHoTgRJ6Bhfrcf46EhD-UJvS9DqUgFSr_MqIvc8IGhTEeEsUUvkWaLCD9UY3ZvlXYfnt3Q",
        "width": 7028
      }
    ],
    "place_id": "ChIJnUf_d59z_UYR3GSy5w4k2Mo",
    "rating": 3.3,
    "reference": "CmRSAAAAIVhMKqK8aE1koBrFJIprW5_wpp0cmD0XLKVieTlTkJUSQzd9_2SgNj0NJMNhxbTlnf8OU-mEdZAkymbi6uwg-QzyyjrmYxhrF6beeUFiWl1rSaEnFjsABv11UesIWwDQEhBiKB_xQHjhR3SGR9zDOdVzGhT28sUofCzBM2DQ7QXsxoJ4vy1uvg",
    "scope": "GOOGLE",
    "types": [
      "restaurant",
      "bar",
      "food",
      "point_of_interest",
      "establishment"
    ],
    "vicinity": "Długa 33/34, Gdańsk"
  },
  {
    "geometry": {
      "location": {
        "lat": 54.35099959999999,
        "lng": 18.6486427
      },
      "viewport": {
        "northeast": {
          "lat": 54.35172290000001,
          "lng": 18.6492037
        },
        "southwest": {
          "lat": 54.35075849999999,
          "lng": 18.6484557
        }
      }
    },
    "icon": "https://maps.gstatic.com/mapfiles/place_api/icons/bar-71.png",
    "id": "226282b03c84b9add4411260ed88981c497cb459",
    "name": "Cafe Absinthe",
    "opening_hours": {
      "open_now": true,
      "weekday_text": []
    },
    "photos": [
      {
        "height": 3264,
        "html_attributions": [
          "<a href=\"https://maps.google.com/maps/contrib/117704098589910216033/photos\">Krzysztof Walencik</a>"
        ],
        "photo_reference": "CoQBdwAAAI5Oq64EtWmUVWJgAx5GW8ZDSHiktrYbJNrhjnuaEYStjNtyB9IXjZOa8K8IjQpkB78XP4xI_kSe3HGPG2SlFvo533cfjtGNwREx1l-wr5aXNQvtLrRyfFO-3xAMIy9fNwsckC3TjRg-pEQ4FicPfLonEBXbLnw90XcBbHfnPDy4EhCexmO4pGHJG5Z5fgAa74NUGhT2iwP-iLdwmmQ-0V_sx13ScMd3Jg",
        "width": 2448
      }
    ],
    "place_id": "ChIJLY2qOp5z_UYRWd-Czw17ZaU",
    "rating": 3.9,
    "reference": "CmRSAAAA5h3FYSFMzh6uHn5-HVNonwkswKJ7BVWoz4z2T7SGdlW7LKlsWN72bUnXwLq3DGuJ6Knb4ZKw6Pz0wgyWYGuHGF_9Kssf-O2DzsvOulZBbjvtPghSNtiEKumqgSekd8CMEhAeBykP0skkS9x2AvnriHUTGhQxtawKfR9zdSC_MobAcshzwhj_nQ",
    "scope": "GOOGLE",
    "types": [
      "cafe",
      "night_club",
      "bar",
      "food",
      "point_of_interest",
      "establishment"
    ],
    "vicinity": "Świętego Ducha 2, Gdańsk"
  },
  {
    "geometry": {
      "location": {
        "lat": 54.352931,
        "lng": 18.647092
      },
      "viewport": {
        "northeast": {
          "lat": 54.35295215,
          "lng": 18.64720335
        },
        "southwest": {
          "lat": 54.35291315,
          "lng": 18.64699795
        }
      }
    },
    "icon": "https://maps.gstatic.com/mapfiles/place_api/icons/cafe-71.png",
    "id": "c27ba66b39e677eaeab5e7b3d237e52a3361b396",
    "name": "18 Południk - Herbaciarnio-Kawiarnia Podróżnicza",
    "opening_hours": {
      "open_now": false,
      "weekday_text": []
    },
    "photos": [
      {
        "height": 4160,
        "html_attributions": [
          "<a href=\"https://maps.google.com/maps/contrib/118030984437170573432/photos\">Tomasz Boiński</a>"
        ],
        "photo_reference": "CoQBdwAAADI77ogHbqrepIfP-xXltInXK3LwFCYcJdF1RfQ5T_p_5gJsYY7Z-ORCgroHa9ucvAXo9yBOIV7j9ZJMnJJwDCx2MonPnkJUxNnB9WD9wJJPcu4zZBvIwNUe99R8GaHz9HA700i4SVGNv4Du42s21MDbiaMlcJ2DuSNgWq-Yy7-HEhCzHi06TnvZZ5BDf-pQwG51GhRGbcni3XUqT3D7czvYDkRq4eHcdQ",
        "width": 2340
      }
    ],
    "place_id": "ChIJK1eQ_HVz_UYR9Qd93r5LqA4",
    "rating": 4.5,
    "reference": "CmRRAAAAUyi3ctpvt2XTxhJiiRy7LRFf2uVPgpHPrYCYnV0tW5UcRVX-XsuKD2dbZTZBaMgd4_MFPaKKWq_GtyrtelkX7ZZCH1CzepF_Bay6Mqk8FRmti_bZvRt-qwu35r9wxE5SEhBDDSakLkPradLyegz5jcs9GhQ7n9OpHKTUxF0zIGxbJTacu8i6Yg",
    "scope": "GOOGLE",
    "types": [
      "cafe",
      "bar",
      "restaurant",
      "food",
      "store",
      "point_of_interest",
      "establishment"
    ],
    "vicinity": "Garncarska 7/8/9, Gdańsk"
  },
  {
    "geometry": {
      "location": {
        "lat": 54.353222,
        "lng": 18.652391
      }
    },
    "icon": "https://maps.gstatic.com/mapfiles/place_api/icons/generic_business-71.png",
    "id": "ce12d97458a0494eb1f504657a8b6db0bc265926",
    "name": "Centrum U7 Gdańsk",
    "opening_hours": {
      "open_now": true,
      "weekday_text": []
    },
    "photos": [
      {
        "height": 3006,
        "html_attributions": [
          "<a href=\"https://maps.google.com/maps/contrib/109546429669594102754/photos\">Jan Sverre Ramsdal</a>"
        ],
        "photo_reference": "CoQBdwAAAJNRgKRYpGsqUKRWSSSsTPzpPjks4jNFhYBciQwfAFni0os5j1PGu_HgfnGHGnxAr6zP-IAmSB_i9p8tPLAOooMi97hULXDN-9-MEFaDSSXWbVCm2yN_E-YXPXBC45BxpGa9LRdDQamIgh50Tr25EFXzI59IZADXgwOjNdpDwcyeEhAOzGTIFSCpbKLPWS9-9SvYGhSJiYDtE7zmyHr-pgNtbZgWgJpzZg",
        "width": 5344
      }
    ],
    "place_id": "ChIJNejCCnVz_UYRffV-6hBN48U",
    "rating": 4.2,
    "reference": "CmRSAAAAfLlc-vuQZXfptvpsAwtQr1QwHwlrRx_1eUfbMj3GNGdLUZAwTmWb7zvfVLOt_WileOMuK91QtCwHKU3mqqjeZe7dVEPYUcD_-geSHro1KnYEZ2kya6VJRKyWZDRYMmWxEhDmkEABmIG1osXrjyZvkcdRGhR2qqYsa6DpoFB7hsjD4jhORxOVpw",
    "scope": "GOOGLE",
    "types": [
      "bowling_alley",
      "bar",
      "restaurant",
      "food",
      "point_of_interest",
      "establishment"
    ],
    "vicinity": "pl. Dominikański 7, Gdańsk"
  },
  {
    "geometry": {
      "location": {
        "lat": 54.3554975,
        "lng": 18.6485719
      },
      "viewport": {
        "northeast": {
          "lat": 54.3568307,
          "lng": 18.6522739
        },
        "southwest": {
          "lat": 54.35505309999999,
          "lng": 18.6473379
        }
      }
    },
    "icon": "https://maps.gstatic.com/mapfiles/place_api/icons/bar-71.png",
    "id": "bae1ab193bd83a817c5cd00a412d5af69a4712e9",
    "name": "Bar Kebab",
    "place_id": "ChIJdVt4E3Rz_UYRU7sdjto6faE",
    "reference": "CmRSAAAA4YMA84Y_1u-R-3kEoSFpcCKtwhqyThgN-3fxFBMnBLOSqid4ztlEkvhbiqljuQnjVZrsL-dafAF-fJIrltSh5ySpiaQ4fArZ-yTAFitA0PNuvTEjrwPEijYOhMMYJmthEhDNQpZkZPRi__i8wo3CSuAiGhSBmMshlxTAkrKT-1HX_SF9vhqPBA",
    "scope": "GOOGLE",
    "types": [
      "bar",
      "point_of_interest",
      "establishment"
    ],
    "vicinity": "Jana Heweliusza 16, Gdańsk"
  },
  {
    "geometry": {
      "location": {
        "lat": 54.351229,
        "lng": 18.657649
      }
    },
    "icon": "https://maps.gstatic.com/mapfiles/place_api/icons/restaurant-71.png",
    "id": "d6c3a912ec03bbc968dbb0d88c77bc5c47eabf64",
    "name": "Zafishowani",
    "opening_hours": {
      "open_now": false,
      "weekday_text": []
    },
    "photos": [
      {
        "height": 3858,
        "html_attributions": [
          "<a href=\"https://maps.google.com/maps/contrib/103287790950104116001/photos\">Zafishowani</a>"
        ],
        "photo_reference": "CoQBdwAAAPs-eSyFPJ0LGu5ig2kCGqQlCCkNN9K7vmRiHQevb_kbm9M6a9SnEJISWq4DQQFh-JVX6vZZAI2n4OlA3612qiTZjDOyrHowRlq9mgtQq_i2sEhn03gkcnbDfKHXeCOnCa4ri27EvyvWXdoGFsrE-AufKp9PkN3dd9FjIWrMvsp2EhDZXNfw_NZCRfxiZjqjlt5CGhRBcurnVmUgjXIbsPUAx_O_vOjMeg",
        "width": 5780
      }
    ],
    "place_id": "ChIJffjCmgpz_UYReIjOHvh3JZg",
    "rating": 4.7,
    "reference": "CmRSAAAAp3GSSE_PKbi4YgnyyPvOq4OQa4xCGx21zH7l1D4a7btMljF8aYgoP_8kFXT7N6carWxXtVi4kQTKTkNlnYwrbHbibo1U5nEysDwQAyI8yz2Y736sjoQXe5Qqw42i6hUOEhAVqtjQamSMHxVRwbwo7phMGhQXkx0a58Jlv426c4VvFu7P_KXkKg",
    "scope": "GOOGLE",
    "types": [
      "restaurant",
      "bar",
      "food",
      "point_of_interest",
      "establishment"
    ],
    "vicinity": "ul. Tokarska 6, wejście od ul. Długie Pobrzeże, Gdańsk"
  },
  {
    "geometry": {
      "location": {
        "lat": 54.3505565,
        "lng": 18.6527194
      },
      "viewport": {
        "northeast": {
          "lat": 54.35059035,
          "lng": 18.652727
        },
        "southwest": {
          "lat": 54.35045495000001,
          "lng": 18.6526966
        }
      }
    },
    "icon": "https://maps.gstatic.com/mapfiles/place_api/icons/bar-71.png",
    "id": "c169434c1b05691aa2ad4298a816f6685bf9c3d9",
    "name": "Winiarnia Pietraszek",
    "place_id": "ChIJXbXY8Z9z_UYR1pYZUFXKXh8",
    "reference": "CmRRAAAAxI7jYiVYY3-KaXQmHaeC0yLeBA17XA9l4T_39feKYaagUjj7EuyyA4YrL-JHbNG0xsF6m4gri_VxeigVyM7R_l3YmhjBjl5h5i0IOvyXQOYU_gWF9IY-9AdBVcrJZmbtEhANuUlu6UkCJDxJaRE2gSneGhS-T_qQN49Vtuqvv95TqktVnbWOxA",
    "scope": "GOOGLE",
    "types": [
      "bar",
      "food",
      "point_of_interest",
      "establishment"
    ],
    "vicinity": "Świętego Ducha 57, Gdańsk"
  },
  {
    "geometry": {
      "location": {
        "lat": 54.3495475,
        "lng": 18.6522773
      },
      "viewport": {
        "northeast": {
          "lat": 54.34977625000001,
          "lng": 18.65237225
        },
        "southwest": {
          "lat": 54.34947125000001,
          "lng": 18.65199245
        }
      }
    },
    "icon": "https://maps.gstatic.com/mapfiles/place_api/icons/bar-71.png",
    "id": "3cafc17d3ad43323511e362e620f004ada6b21a0",
    "name": "Mono",
    "photos": [
      {
        "height": 3024,
        "html_attributions": [
          "<a href=\"https://maps.google.com/maps/contrib/109160621668636156343/photos\">Cathal Cranney</a>"
        ],
        "photo_reference": "CoQBdwAAACsYXcnNDMnWepJ0nFu6H7eq1FFibw9ygw9wythiaxoLvi7t8klySCu8LSFIiIb7Mr7SN0C3RtXJhPklMxF24AUbRPdl-lTNfUoqzxMuPwSxvyy4OPrF2IdyoTQN4NpPifEZJGHP8QvXZcFi5X5rTyO-SvuRyj9APkTwyae42_GwEhD2s00YYhXUXUnMP8P-EaXaGhTw5p4stZNEbTtQRO8kmfeqek8sGQ",
        "width": 4032
      }
    ],
    "place_id": "ChIJw2wfjp9z_UYRvMZx2SoF24c",
    "rating": 3.8,
    "reference": "CmRSAAAAif5soCSSpGurYPeRHJzWlLAT17nS2H7cg6HIODJekRWR8y5xQEnMLehe8xFvZisM6enykEbCgBql7JHiv1eiyzW-R63rI4YK_WCFh0BNBYmj_5B8alpY_cpc-Mto6TeGEhCPCvhpT1RDST-hOH26M0rFGhQ2OaUeXAThKDRJzK6vXyBRz6QDhA",
    "scope": "GOOGLE",
    "types": [
      "bar",
      "point_of_interest",
      "establishment"
    ],
    "vicinity": "Piwna 28, Gdańsk"
  },
  {
    "geometry": {
      "location": {
        "lat": 54.35315469999999,
        "lng": 18.6451013
      },
      "viewport": {
        "northeast": {
          "lat": 54.3532207,
          "lng": 18.64535675
        },
        "southwest": {
          "lat": 54.35313269999999,
          "lng": 18.64501615
        }
      }
    },
    "icon": "https://maps.gstatic.com/mapfiles/place_api/icons/bar-71.png",
    "id": "f2939857abfe0e64520266214ba8250f2870aabc",
    "name": "Central Club",
    "photos": [
      {
        "height": 612,
        "html_attributions": [
          "<a href=\"https://maps.google.com/maps/contrib/104417683538106222104/photos\">Central Club</a>"
        ],
        "photo_reference": "CoQBdwAAANWcrw23CS0QQ9GLPLLO3cH-YLnGuAHw8qko6yxfoE_pkFIxk465J-XcfmEJP6N5eol8AJ7NqHHpUpzObgneSJX6boPhddHHvx56nYfEZJCoUgOxDTKQhRm-UgqG48UFGkrBujDE7xNCkMvYBYRrAkRgjExdpTfNLvIWrCWznDPyEhDfbKMjKvZWtaUZ8uWSFttaGhTzSqf60OUt1DFVmhBo86n_A1Fh2w",
        "width": 425
      }
    ],
    "place_id": "ChIJAyAbGXZz_UYRWDwowVI3hNM",
    "rating": 4.1,
    "reference": "CmRSAAAA28cgCB_h-Q28SO0tCb4y0ju8h_rla1TbLWEBLegxWZCe90HJ4Wuv7BVnxNmNXQOUdRGKAksCmUocIb2R8NWAjWQl2mOfe7tP0to73UHNE1wuTRyv9xgwf45jfSPuXarMEhBbFpbuV5xYh1TkkoM_zm52GhTEwC9z01VcEvqSrBAYG4CfCYpGqw",
    "scope": "GOOGLE",
    "types": [
      "night_club",
      "bar",
      "point_of_interest",
      "establishment"
    ],
    "vicinity": "Wały Jagiellońskie 5, Gdańsk"
  },
  {
    "geometry": {
      "location": {
        "lat": 54.34962179999999,
        "lng": 18.6484727
      },
      "viewport": {
        "northeast": {
          "lat": 54.34967389999999,
          "lng": 18.64902020000001
        },
        "southwest": {
          "lat": 54.3494655,
          "lng": 18.6482902
        }
      }
    },
    "icon": "https://maps.gstatic.com/mapfiles/place_api/icons/bar-71.png",
    "id": "7d8e2c0a2f6ee21830183e17ac708ae563eca800",
    "name": "Bruderschaft | Pub Gdansk",
    "opening_hours": {
      "open_now": true,
      "weekday_text": []
    },
    "photos": [
      {
        "height": 632,
        "html_attributions": [
          "<a href=\"https://maps.google.com/maps/contrib/103814110701225305340/photos\">Bruderschaft | Pub Gdansk</a>"
        ],
        "photo_reference": "CoQBdwAAAJISCEEFFAxviQmdLQp0NShmLRvqFqE1hzOsJl6MGtcYt7AjVhIHu8is8I69c1IlKupD4f60rh9DAquhLiaWqjx39TM76X5MmJVj3wNvc268IxIgUSLKVsWGAOMEC41EWkUJ30CmCtd7A7ZJcnbEcX_Etz9tVDKdiDNoGeU2NgYKEhAgndvIH2BeOYVMq596Sz14GhSmAUqi-gIbD_4KPLEw3bvctv6Ktg",
        "width": 632
      }
    ],
    "place_id": "ChIJG36MU55z_UYRjeymdR4O2so",
    "rating": 4.4,
    "reference": "CmRSAAAAPTwgF3Zsmuxy-57I0qWeRJeDbDcQFetMJ15wRn-beCUYqqvf2-hQdC1L96ykIImqk8negctD3hmnh9I5lKYKUbMb57LN5CAsGMu2cP8rKtNk3FLE9geVbzgjbmuw7Do3EhD7I2P77kM08K369R2m_9wmGhT3rYhgZseu_xD-ARKUaCjKpHeOew",
    "scope": "GOOGLE",
    "types": [
      "bar",
      "point_of_interest",
      "establishment"
    ],
    "vicinity": "Długa 81, Gdańsk"
  },
  {
    "geometry": {
      "location": {
        "lat": 54.352743,
        "lng": 18.6575306
      },
      "viewport": {
        "northeast": {
          "lat": 54.3527483,
          "lng": 18.65772605
        },
        "southwest": {
          "lat": 54.3527271,
          "lng": 18.65746545
        }
      }
    },
    "icon": "https://maps.gstatic.com/mapfiles/place_api/icons/bar-71.png",
    "id": "8bc79d1b601884b79bba876af1202dc7f797491e",
    "name": "Pool Salon",
    "opening_hours": {
      "open_now": true,
      "weekday_text": []
    },
    "photos": [
      {
        "height": 619,
        "html_attributions": [
          "<a href=\"https://maps.google.com/maps/contrib/109586126761522853746/photos\">Pool Salon</a>"
        ],
        "photo_reference": "CoQBdwAAAD6MWDzpjHS92rSS2dIDxrO3xUENZURpgsVBKTccHhALcEVRqXWga7wNH1w84XU-2WSSCKOfSMe5RzeRP1NZ-yfthQlPV4_Qfk14-ALNddi84a8nMwzwkv_j_sYaUh8au-A336bgTJH8PNbnCbZDocUCrzvwYiig08R8FK0Nv8XEEhD-PFlaXC3lVWGxXGcUk-56GhTP2Oo-NI9Xutv8Zcg1GkS5jP78mw",
        "width": 930
      }
    ],
    "place_id": "ChIJJwPqwgpz_UYRA73GCrpmg3s",
    "reference": "CmRRAAAA7z9bbFF21PQUe4LGct51eSm8Y7WQs5llXtKghET83yp_hALf6SdSIcVJx66HX84mspnonO4kM7a_hcEFNIj2SFiDoknTJB3x5aJgv4gHzx3LDLfRRaNsewpsiJ5zoEnhEhB-JpfaNKbNrKb9Uu45gdQQGhQiErA_AySAIYYt_-ty_6x1YfdkeA",
    "scope": "GOOGLE",
    "types": [
      "bar",
      "point_of_interest",
      "establishment"
    ],
    "vicinity": "Targ Rybny 10a, Gdańsk"
  },
  {
    "geometry": {
      "location": {
        "lat": 54.3532569,
        "lng": 18.6617916
      },
      "viewport": {
        "northeast": {
          "lat": 54.3533965,
          "lng": 18.6618513
        },
        "southwest": {
          "lat": 54.3528381,
          "lng": 18.66177170000001
        }
      }
    },
    "icon": "https://maps.gstatic.com/mapfiles/place_api/icons/lodging-71.png",
    "id": "eb33c3f7cda5c4ea5002695f41a79a21bc1559eb",
    "name": "Ołowianka",
    "opening_hours": {
      "open_now": true,
      "weekday_text": []
    },
    "photos": [
      {
        "height": 2048,
        "html_attributions": [
          "<a href=\"https://maps.google.com/maps/contrib/103541820106240518693/photos\">&quot; Ołowianka&quot; Bed &amp; Breakfast</a>"
        ],
        "photo_reference": "CoQBdwAAANhScC1ay4DhIx5vgNtk5Ek0-yepJJVyAwRKJqHqxUbRN0cMBCyTb6ReYRrvhCjUbrlY8xKDaRk6wVdjBh_Ktp7TbJJ80o6cQyZ4Tg2stl9HniT5hhugVTHJj1lheG7hw5xIU4zAALqBhhcF_01yFZsXQnMq6fxEU9DhFoHiWLL8EhA1gmXXbLS_W_RwA-7bqBt5GhTxUvRgt6dVPwk93-iF0eGIYdIqbQ",
        "width": 1361
      }
    ],
    "place_id": "ChIJpzJBsQtz_UYRnwnIB-lfHgg",
    "rating": 4.2,
    "reference": "CmRRAAAAM-HH63JKzi0gt_Bhnw9cPgdwZg7PK-RrMt-HV8SFn5aa1BADAf78nEUr1kIhdflrw4cXVMgI9sGJMqBXFabAGrK55WJhxD78pFvU8RLEV8k0V-K5lo9LxJCD-c3tnordEhAps9aZ-1KB-KuEfJdGWyrdGhT9sE-5DrHmv9nrSiCNyuNB5ZMTKA",
    "scope": "GOOGLE",
    "types": [
      "bar",
      "lodging",
      "restaurant",
      "food",
      "point_of_interest",
      "establishment"
    ],
    "vicinity": "Ołowianka 3A, Gdańsk"
  },
  {
    "geometry": {
      "location": {
        "lat": 54.35007539999999,
        "lng": 18.6516014
      },
      "viewport": {
        "northeast": {
          "lat": 54.3501503,
          "lng": 18.6516569
        },
        "southwest": {
          "lat": 54.3498507,
          "lng": 18.6514349
        }
      }
    },
    "icon": "https://maps.gstatic.com/mapfiles/place_api/icons/bar-71.png",
    "id": "ccfbaa139009395785cc4853e0a0bd80265d3a7b",
    "name": "Browar Piwna",
    "opening_hours": {
      "open_now": true,
      "weekday_text": []
    },
    "photos": [
      {
        "height": 3120,
        "html_attributions": [
          "<a href=\"https://maps.google.com/maps/contrib/100324596365486938196/photos\">Marcin Lewandowski</a>"
        ],
        "photo_reference": "CoQBdwAAAKbzJfwtObIh8HVLHG4fJlCMuJP8EDW8ToEg-dIFvEZGV1KKq-QqPa5I-_OE84h5nelXKX-fB5EPtrYp8D9CeYGqwrSE1M2ibb4RUKfE78Da7pG7eChluhZPK1FmKqN7ECg_WcgXHqskleqh24qHJ0YG2odcbMDvSuvRaI8P9ERlEhAVOxbPP741gR1mhU0GuiugGhQEl2EJuQZgzsaWH7T2zz5TDSm7rA",
        "width": 4160
      }
    ],
    "place_id": "ChIJ_YVTlJ9z_UYR9p8LFD7i_WE",
    "rating": 3.9,
    "reference": "CmRRAAAAk-5KGsSTdTkh53BdDYbRwczU1kuLTepail2hdKcF6uRz49EE-BCJdXGeXolk2uB4XdbGjI-TqgDjpKsHIN9LAEYDY7qlpV2U0Fn_YiVjRcdEDPjPvU7NPYFbYEJn8H1fEhBAcawFoOR_q_kmy7uaPPOlGhRZ6Irms240Czdpqw_-UJMv0-s-9w",
    "scope": "GOOGLE",
    "types": [
      "bar",
      "restaurant",
      "food",
      "point_of_interest",
      "establishment"
    ],
    "vicinity": "Piwna 50/51, Gdańsk"
  },
  {
    "geometry": {
      "location": {
        "lat": 54.349322,
        "lng": 18.652173
      },
      "viewport": {
        "northeast": {
          "lat": 54.34939159999999,
          "lng": 18.65224885
        },
        "southwest": {
          "lat": 54.3492988,
          "lng": 18.65194545
        }
      }
    },
    "icon": "https://maps.gstatic.com/mapfiles/place_api/icons/restaurant-71.png",
    "id": "a0dfb158b76e0494ede0aa4b7a2cf77ecdb35ece",
    "name": "Red Light",
    "opening_hours": {
      "open_now": true,
      "weekday_text": []
    },
    "photos": [
      {
        "height": 2448,
        "html_attributions": [
          "<a href=\"https://maps.google.com/maps/contrib/117704098589910216033/photos\">Krzysztof Walencik</a>"
        ],
        "photo_reference": "CoQBdwAAALBh4xhImdhKru_lQpMfAUN5A-GYiZXXNzpqRwPj_yTlTh8lEKRimN0khj3M7EXvkhOWE2WUc_MFeagGhneVDxlPSnxuSEfhbkLvS64D79Qh9hYnlxz33GEbyVl2my0WhojvWv8QWDcO7Zrrxj7GA6ajn5vd3U9NnoJuqaJtpFtMEhDMFsn-oSxQfA_ztk12csllGhR7lPEB6BiLKqcLOlnZ0eYd1T4sfA",
        "width": 3264
      }
    ],
    "place_id": "ChIJQUvOSaBz_UYRDrIT-oPnHww",
    "rating": 4.3,
    "reference": "CmRRAAAAHNWvO7HWBCkapQjnEOjHREJaenH3H8R2zz70OmrlK3yyeAAVA4esMouADAnsXpnCumdA38Wq1MEzF3nfLZFoB4hc0xCAu0GHG36yxXtTkoKVYWai9cq-YyuZ-x2MoXC0EhBC23mJwpWx7strvucGYyuOGhQhwCirDbIn332bg2iegE_eqMYo5g",
    "scope": "GOOGLE",
    "types": [
      "bar",
      "restaurant",
      "food",
      "point_of_interest",
      "establishment"
    ],
    "vicinity": "Kaletnicza, Gdańsk"
  },
  {
    "geometry": {
      "location": {
        "lat": 54.363049,
        "lng": 18.648187
      }
    },
    "icon": "https://maps.gstatic.com/mapfiles/place_api/icons/generic_business-71.png",
    "id": "c9b16c90cac1a22f1db88c6e950d9bfdf12fd650",
    "name": "Buffet",
    "opening_hours": {
      "open_now": false,
      "weekday_text": []
    },
    "photos": [
      {
        "height": 1022,
        "html_attributions": [
          "<a href=\"https://maps.google.com/maps/contrib/101375003840936730657/photos\">Buffet</a>"
        ],
        "photo_reference": "CoQBdwAAAHSvHJJNGzKWGScMqL87-yvaB4tm_XRzBVkFdGUzfm7qHR1MBtdtj5_10aTtT2e07zV4wWVd1xAguAirRR7avvJC8iucoeZrHxB8buLtrQjzvRlA5Or-r9RaJ0HYrusndEaFWYtXfrTsZaaRAt7yoc9rWzrcgj73nguvBmiGmycXEhAcJRWQGG7jREFTdhFe2GtTGhR7CvEoGKfpTsc8Pr5J28C9AFjMPw",
        "width": 1022
      }
    ],
    "place_id": "ChIJ-XCXDXFz_UYRJKCOKbbgo1o",
    "rating": 4.5,
    "reference": "CmRRAAAACnySztl5mp05CeIUpN-MODOHopvXormeOe96yAHoK2jDJvwxtTmafymtmwckmxAFMhiNkF900c1ruvBx9hURHpsBjZ-nsmfsWiFU9Gxyznj8ptDMIEL9wXt0xLKkHpbLEhC5G6yWJCNfyeGv-QAiYTxJGhQKSXL1VXjLlHEpLsnhZKt6U-0EUQ",
    "scope": "GOOGLE",
    "types": [
      "bar",
      "point_of_interest",
      "establishment"
    ],
    "vicinity": "Doki 1/145B, Gdańsk"
  },
  {
    "geometry": {
      "location": {
        "lat": 54.3489827,
        "lng": 18.6536962
      },
      "viewport": {
        "northeast": {
          "lat": 54.3491231,
          "lng": 18.65381350000001
        },
        "southwest": {
          "lat": 54.3489359,
          "lng": 18.65365709999999
        }
      }
    },
    "icon": "https://maps.gstatic.com/mapfiles/place_api/icons/bar-71.png",
    "id": "58bb67688b19f871d4f8bfb2cc038571fdb1a767",
    "name": "No To Cyk",
    "photos": [
      {
        "height": 483,
        "html_attributions": [
          "<a href=\"https://maps.google.com/maps/contrib/113124015122821347914/photos\">No To Cyk</a>"
        ],
        "photo_reference": "CoQBdwAAAOrIxtQjibDwDG7TII6lV1Du-Uz-E9WxBYVAfqEtQLGy1DRW3TOEt377ne0GlmlsuBp3nVpZZI6sHhRk-ooWLvFEWrLF7OVvdkkkSBXvJJbZvEhiIqoVYkkH1HWX6t4DvulqR-1g-Egka3VqS4kL7Ktl10x94lke-njD0rlowigbEhDGwpJEEOT-Cqv3y0WoUb6dGhSq9wW6T6z5hE6l4vO0SfebkrY-vQ",
        "width": 720
      }
    ],
    "place_id": "ChIJ29Y6LqBz_UYRiDo9-EL8Pkk",
    "rating": 4.3,
    "reference": "CmRRAAAAUV8vDbyb8aXEQYRaTaa9BDjoJAiBcnhZUq_D_1pb2E7RPZEbaZ7exsBFvwbzuBxX-AwKJUWb4Iq8CIrKdgmIdS5DDDNy-_Ai_7yxdcAvCdMWSEphPG_eBv3inLhAY6mFEhARJz_Sj9ann9geSHR7znZLGhTl7U23zGW5m2BEETzCt2TMzumULw",
    "scope": "GOOGLE",
    "types": [
      "bar",
      "restaurant",
      "food",
      "point_of_interest",
      "establishment"
    ],
    "vicinity": "Chlebnicka 2, Gdańsk"
  },
  {
    "geometry": {
      "location": {
        "lat": 54.3479719,
        "lng": 18.6643682
      },
      "viewport": {
        "northeast": {
          "lat": 54.3480374,
          "lng": 18.66446015
        },
        "southwest": {
          "lat": 54.34777539999999,
          "lng": 18.66433755
        }
      }
    },
    "icon": "https://maps.gstatic.com/mapfiles/place_api/icons/bar-71.png",
    "id": "14dbff9e99f11715a0bc4e6d7e856543851cc870",
    "name": "Tip Top. Pizzeria, bar",
    "opening_hours": {
      "open_now": false,
      "weekday_text": []
    },
    "photos": [
      {
        "height": 3840,
        "html_attributions": [
          "<a href=\"https://maps.google.com/maps/contrib/113267895349330816294/photos\">Szymon Adamski</a>"
        ],
        "photo_reference": "CoQBdwAAACimjIpipLJ4MMvMNS7sfNbE55Qd7jO_MN8GtT5QEfOTgUiO3rpL4BVJ5daxaoe-k3kU1edWN-DxiWCCq3RspM5kkCnmxNw_QUnN0DQb3PSyut9buqbOcxgOGHmCaJvQAHN1GZEtbezT7cQU9V5ekZD6bEJQ-VkdXveeOqyceZgFEhCN8VriALhqPsp4gJCHyV7nGhTO_TNjnj0punU8KlD3sSgY4HX5Ow",
        "width": 2160
      }
    ],
    "place_id": "ChIJaVqcDadz_UYRR6DQ8fux_Ok",
    "rating": 4,
    "reference": "CmRSAAAAORgci3WLwrls1QdlDjgk_e138O3ezQaUXy2sJ5PMK1MbMKDaMyziGvGISWh7RoSrIxszPrMwB8BPxJN9Mvv8uaCdkKDomfxyQ5ufbJxzKtKeOc7RY40NzJdND0f7TgP1EhCjS3-NidUr0PZZsmDuzBEMGhSE9iNMVmnBZyMhUKUFHK4rWmz8Jw",
    "scope": "GOOGLE",
    "types": [
      "bar",
      "meal_delivery",
      "restaurant",
      "food",
      "point_of_interest",
      "establishment"
    ],
    "vicinity": "Długie Ogrody 21, Gdańsk"
  },
  {
    "geometry": {
      "location": {
        "lat": 54.35534519999999,
        "lng": 18.6464606
      },
      "viewport": {
        "northeast": {
          "lat": 54.35637675,
          "lng": 18.64674215
        },
        "southwest": {
          "lat": 54.35500134999999,
          "lng": 18.64561595
        }
      }
    },
    "icon": "https://maps.gstatic.com/mapfiles/place_api/icons/restaurant-71.png",
    "id": "188100c56c937d4ec20f40307e244a5640657bf9",
    "name": "Lezzetli",
    "opening_hours": {
      "open_now": true,
      "weekday_text": []
    },
    "photos": [
      {
        "height": 1303,
        "html_attributions": [
          "<a href=\"https://maps.google.com/maps/contrib/115490642977267388042/photos\">Lezzetli</a>"
        ],
        "photo_reference": "CoQBdwAAABSa5ZXQQU9b7uKDe_M41x4ZOffyq2EIFyg0aQnul_xV4gRCNJgvUkIX2sFP5pTTvSMk5f7l7GUR3AlKIb7FG7R-jEprCL6nqQx1Dy1ord9w0yLNAPmiOBt3_vUYkoryJ3RTGzbVynW2rH4klo0qeMMOhMmZXT3DcMdBh-Ke9xkeEhDYgNgtmzJidUmQufIDRbpRGhQi_hfiSUkYhK6MBKIH7PU5tMFxTw",
        "width": 1306
      }
    ],
    "place_id": "ChIJQ-ybjXZz_UYRN0EB3p9bdtM",
    "rating": 1.4,
    "reference": "CmRSAAAAinSS2Gei0hQSgjg9-OWPNE0sfjpXUQEX7ZwA5Cr7Zclgo1r4QiVqAjSeXceXINEdb4SU-EmWebSYHAKu1TDlj5ktAribHBIFNhqY1LV2K4QPN3KlcY-Teu0wK1ZZGfrsEhAqsa9KMMIA4hWTOPUYmD8vGhSg-_1mbA9PCPdwY8BcQR25jxjCDQ",
    "scope": "GOOGLE",
    "types": [
      "bar",
      "restaurant",
      "food",
      "point_of_interest",
      "establishment"
    ],
    "vicinity": "Podwale Grodzkie 8, Gdańsk"
  },
  {
    "geometry": {
      "location": {
        "lat": 54.3526339,
        "lng": 18.6531676
      },
      "viewport": {
        "northeast": {
          "lat": 54.35270415,
          "lng": 18.65318625
        },
        "southwest": {
          "lat": 54.35257955,
          "lng": 18.65315325
        }
      }
    },
    "icon": "https://maps.gstatic.com/mapfiles/place_api/icons/bar-71.png",
    "id": "3bc86c0ce376ee04e2fd5a36c6c027e113515eaf",
    "name": "Pułapka",
    "opening_hours": {
      "open_now": true,
      "weekday_text": []
    },
    "photos": [
      {
        "height": 2160,
        "html_attributions": [
          "<a href=\"https://maps.google.com/maps/contrib/107878094994272872924/photos\">Piotr Marszałkowski</a>"
        ],
        "photo_reference": "CoQBdwAAAJeNMAyOcixBu3IYNYqpCK0QHt_vw69gDVIRu3F8npY1e1YdFlOCx671Dq_pgPd-Ec1bIh3NtA5AU7qbCUUQrmJLZ9yl1HU40qAJRLbO8j_UKgo85fMgGjGlxTO8bGn5AKUqNxWcNp5IyPwQaoubVQ0XcQQeUzG4WqO3eHANUUJnEhDQRPMB2LxXfS3d3wzHwlPCGhS_MqVpQNewrII9UbD4cPPr0Z72ug",
        "width": 3840
      }
    ],
    "place_id": "ChIJR5HWQXVz_UYRL-KiYGr4lQE",
    "rating": 4.7,
    "reference": "CmRRAAAAuCmvv1gk_81hxxpxcP7uCUo1els4bs8IEXLiMmwpj72SfPp92khuyzZfxlbNNCSzY1mv87hvE2PZ3LlHuhejiOniV8N7WElfNxhE-_GtKF-zwMYOjlsUrDQT2yGp8-vjEhDIUaaT4pfk1yTBxuCHZtG2GhSdt7oOI5y-ofKqJVQkm0M0G5iv0w",
    "scope": "GOOGLE",
    "types": [
      "cafe",
      "bar",
      "food",
      "point_of_interest",
      "establishment"
    ],
    "vicinity": "Straganiarska 2, Gdańsk"
  },
  {
    "geometry": {
      "location": {
        "lat": 54.35915869999999,
        "lng": 18.6493153
      },
      "viewport": {
        "northeast": {
          "lat": 54.35919474999999,
          "lng": 18.64941205
        },
        "southwest": {
          "lat": 54.35905055,
          "lng": 18.64902505
        }
      }
    },
    "icon": "https://maps.gstatic.com/mapfiles/place_api/icons/bar-71.png",
    "id": "efc0de363a8c04a7f5a3c2004c44434d2b3aefc9",
    "name": "tiriBAR",
    "opening_hours": {
      "open_now": false,
      "weekday_text": []
    },
    "place_id": "ChIJuwqIDnRz_UYR34IfzH7E2wg",
    "reference": "CmRRAAAArr2arjYGdzUwwe5mr2r25f5xBjTfWQmmsn2FOvfJmH2cpKDKmrlUlc4NjNHAkmH2nFeMQTWGJoMLF176s0yGoWjsDtCwv8P7yWRQbDtuw6PvQfA8xu37Ulhpj4xjzVfIEhBA94e0HMSz18TG1u0Hp5GZGhQqOF9Xp-R9k_qMRSQa5P7IZZLjtw",
    "scope": "GOOGLE",
    "types": [
      "bar",
      "restaurant",
      "food",
      "point_of_interest",
      "establishment"
    ],
    "vicinity": "Łagiewniki 9, Gdańsk"
  },
  {
    "geometry": {
      "location": {
        "lat": 54.34943,
        "lng": 18.6480711
      },
      "viewport": {
        "northeast": {
          "lat": 54.34946590000001,
          "lng": 18.6486819
        },
        "southwest": {
          "lat": 54.3493223,
          "lng": 18.6478675
        }
      }
    },
    "icon": "https://maps.gstatic.com/mapfiles/place_api/icons/bar-71.png",
    "id": "2156e3d1e9086dd6df25d8aba9a417ebb4fd7d14",
    "name": "Pub Piwnica",
    "opening_hours": {
      "open_now": true,
      "weekday_text": []
    },
    "photos": [
      {
        "height": 485,
        "html_attributions": [
          "<a href=\"https://maps.google.com/maps/contrib/108672726601436895227/photos\">Błażej Wielgosz</a>"
        ],
        "photo_reference": "CoQBdwAAAMK8YPQpvwo4oJgJTVFQgUfJFdtUZIsUeFDHY2mntX4tAF-fcyAyeRQvAtCg8jY50HiOMormR1z_jur9JxPc87KpDPekEZow-Kd1fLcfqRwioZNTxAcC_-aCM2FrXpRnfuJS8FVPVyOSZLz0Ew7w5auvR7JU_H4eD4dByTzoyRyLEhAVy0w55MVjcBP-OBVVqkMjGhTCZ5k6WDqCL0yIhvgWRubr5j6pZA",
        "width": 1000
      }
    ],
    "place_id": "ChIJpclHVZ5z_UYR0EseM9UB2ss",
    "rating": 4.4,
    "reference": "CmRSAAAAv2QUtlyRE4uLC3FnSsNHsXJt2WqqM9MUEsF2U_ioF0zW1-EzounwugZEwytGftSVpoOLLeEsbydV9VoxF434ReKMS9JLNhaKAcFNUCWpEpejBRAf0w3mqN3wC_RaN4ljEhDxpUzYeARS_y2N5jJ3DQSIGhRMG9xLyA90NoGg_BrSUHP0xoweiA",
    "scope": "GOOGLE",
    "types": [
      "bar",
      "restaurant",
      "food",
      "point_of_interest",
      "establishment"
    ],
    "vicinity": "Garbary 1, Gdańsk"
  },
  {
    "geometry": {
      "location": {
        "lat": 54.34994709999999,
        "lng": 18.6542152
      },
      "viewport": {
        "northeast": {
          "lat": 54.34999909999998,
          "lng": 18.6542954
        },
        "southwest": {
          "lat": 54.34979110000001,
          "lng": 18.65397460000001
        }
      }
    },
    "icon": "https://maps.gstatic.com/mapfiles/place_api/icons/bar-71.png",
    "id": "c5423f7e83a819e335d5fc254b063efbbdcd7e45",
    "name": "Wine Bar \"Literacka\"",
    "photos": [
      {
        "height": 4800,
        "html_attributions": [
          "<a href=\"https://maps.google.com/maps/contrib/102938736106540874628/photos\">Maciej Snarski</a>"
        ],
        "photo_reference": "CoQBdwAAAGR9h1opiN2WTMRE9uqFEKFlSwAQE24a1NoO1shwmnhTCgu7uUsPxmWd64GcpqH25vo8O_OW3xxygCRQkNPR0RwefSP5AVQn4QAoCBv2mun4pS3TzUZQTYp6JGgw7SAaDHxc3ZlTU0MAEL468KWpMV9_HfhWs8Rz2-wIe5FvrrMuEhCDOUEBAgxOrwyb2rQ5KCjfGhT4nUE1pRHsSjdwwQeIqxVFePHOag",
        "width": 2704
      }
    ],
    "place_id": "ChIJPxaVGKBz_UYRHXU_IG2Ppb0",
    "rating": 4.6,
    "reference": "CmRSAAAAgqtsiHYlS-Et_itcGJIcSYq2k8mVyTSZPDumY_IvkhqZ2E4d3mOmS8hQXrXhOyq4nNv6UcPEj8H4NzOFHPLFRoHbAlUhNWus3uyq4BeRtHYDdgKglGPfH22G87EVH2VREhAK3Q_AUkYR09CbIZem307tGhRJjApLPkfSAQK4s2AEEcZcYGjAIw",
    "scope": "GOOGLE",
    "types": [
      "bar",
      "food",
      "point_of_interest",
      "establishment"
    ],
    "vicinity": "Mariacka 50/52, Gdańsk"
  },
  {
    "geometry": {
      "location": {
        "lat": 54.34837400000001,
        "lng": 18.651386
      },
      "viewport": {
        "northeast": {
          "lat": 54.34857760000001,
          "lng": 18.6515531
        },
        "southwest": {
          "lat": 54.3477632,
          "lng": 18.6508847
        }
      }
    },
    "icon": "https://maps.gstatic.com/mapfiles/place_api/icons/restaurant-71.png",
    "id": "7f07faa786a6c3f84dbb911f89bda186442c38b4",
    "name": "Sto Siedem",
    "opening_hours": {
      "open_now": true,
      "weekday_text": []
    },
    "photos": [
      {
        "height": 720,
        "html_attributions": [
          "<a href=\"https://maps.google.com/maps/contrib/117319594235760182645/photos\">Sto Siedem</a>"
        ],
        "photo_reference": "CoQBdwAAAEKfybNCIZDS14_uj1Ths1ixkvZDEYY3lI42btgoRi2eqDrRSrGRS7nK8qU7BMAD0yDoNXbt4TrmGlJc1al4Jzk2sZVUCIzTYe39ZN0CqYU_VZsddP8qNIDianl3L8L8iHLlgjz_W1A3zydCR44Jc3zRKVzlPavI-qDczhSWpYbcEhDW61PBCB-0AFx-Vgy9fO2cGhQ0LWP2dBwWFo0WkFotg-uGTIdZ8Q",
        "width": 724
      }
    ],
    "place_id": "ChIJZWJIep9z_UYRRjsAwLt1yIE",
    "rating": 4.6,
    "reference": "CmRSAAAAyyxm6EwgTNTEJHvIoCX113x6Cg77ANjlYhJC66fq9xJlM1BMTg6yVnc47UbvflfLciizDSi7px_LXwSmS6SgetfgxfYOaciPgtj5B47jMC9CqipnexzB6SqsYtNx9Fh4EhC5uaivUvuvxxZ1sa-KJZXLGhT0QmbocaUoPUImMI6eKXREBPSLBw",
    "scope": "GOOGLE",
    "types": [
      "bar",
      "restaurant",
      "food",
      "point_of_interest",
      "establishment"
    ],
    "vicinity": "D, Ogarna 107, Gdańsk"
  },
  {
    "geometry": {
      "location": {
        "lat": 54.3486059,
        "lng": 18.6543158
      },
      "viewport": {
        "northeast": {
          "lat": 54.348782,
          "lng": 18.65444014999999
        },
        "southwest": {
          "lat": 54.34807760000001,
          "lng": 18.65427435
        }
      }
    },
    "icon": "https://maps.gstatic.com/mapfiles/place_api/icons/bar-71.png",
    "id": "c64dd1f78e23ef2d0145a5e81d321988906bce02",
    "name": "Pijalnia Wódki I Piwa",
    "opening_hours": {
      "open_now": true,
      "weekday_text": []
    },
    "photos": [
      {
        "height": 2160,
        "html_attributions": [
          "<a href=\"https://maps.google.com/maps/contrib/105770781529288032821/photos\">Adam Campbell</a>"
        ],
        "photo_reference": "CoQBdwAAAH2svs-Q4U1RVfu2IhxYwrP-ycb0IjmunPA7cdiCZdhLnb84ihQqVQU4U1hQUFx6d0l2eCzN9Q8u0UGdzqilvGmf5BUbgi65tt9Aw-KoCy3VLsXDK8IAjx9nDR67a-t5pBI4catQjZIP8yvT4uML90sUkj8Y8ZScr9TQ-hzQwsJuEhC0zq1OLlG-QCLIJlnG-Kg6GhRUQH2De_J86ZMZLfm4QwjjeW3WtQ",
        "width": 3840
      }
    ],
    "place_id": "ChIJy7lENaBz_UYRIpirzb32QKI",
    "rating": 4.1,
    "reference": "CmRSAAAAjfvNSitzzXx7LGJkVV4YL_eeLaNT2fA5GKL78sKqcGATo1X0y1WzmzK5y7G3cI4dOqYIlOi83gFQ5ud6D5N_f-e0Lh4G9mqqUNGWeav4dR_x4K2Xm8YhHq8RqzZ8nL0OEhCRni3O9WuAwh86V-36kuoPGhRRFd8ey1S4761v3aTIzUeIQWEKCg",
    "scope": "GOOGLE",
    "types": [
      "bar",
      "point_of_interest",
      "establishment"
    ],
    "vicinity": "Długi Targ 35/38B, Gdańsk"
  },
  {
    "geometry": {
      "location": {
        "lat": 54.35042900000001,
        "lng": 18.649761
      },
      "viewport": {
        "northeast": {
          "lat": 54.35048825,
          "lng": 18.64981555000001
        },
        "southwest": {
          "lat": 54.35037724999999,
          "lng": 18.64971335
        }
      }
    },
    "icon": "https://maps.gstatic.com/mapfiles/place_api/icons/restaurant-71.png",
    "id": "08e776dc03c85ab58412ca6828785fb330f542ea",
    "name": "TIME OUT Restaurant & Sport",
    "opening_hours": {
      "open_now": false,
      "weekday_text": []
    },
    "photos": [
      {
        "height": 3456,
        "html_attributions": [
          "<a href=\"https://maps.google.com/maps/contrib/102685366488708015273/photos\">TIME OUT Restaurant &amp; Sport</a>"
        ],
        "photo_reference": "CoQBdwAAAAj_fFP3FOE6_ph4gvTjm0LP3GzdQv3md6z6ejOM0yTHPaAssatP4bYleCWdkcoXCQcKtHp79tkW0gLhawwKtRmJxWgv0qfdFcEQLDN2g7B8TiEJo1VfhvqmV6Sl-8675iWDEH00a9PzwshcRydsHO7iMKCPeePMX-lcizZUwyujEhDi1etnXzOuhvOnLJcqa5T-GhR8i3XDvT1t57FOHYN3Mb787HHcnQ",
        "width": 5184
      }
    ],
    "place_id": "ChIJQ5pctp9z_UYRan8neDqbdb8",
    "rating": 4.5,
    "reference": "CmRSAAAA5JrP95KWJzsMwjBTI09naLVzYeapR6GZ7bTDORXTza3yaQPd-qi_3chnVFY4Y4WWKUO9iny8yUq7yG2GA25N3SomKFkBW2ycyznyyEbmDx2-lRZLdVVlhR5B_YS9nD5vEhAz0fphs1E60k1qSqDs94YHGhQw7t8S3ZkmRvwRZw3zM5MTRUalEw",
    "scope": "GOOGLE",
    "types": [
      "restaurant",
      "bar",
      "food",
      "point_of_interest",
      "establishment"
    ],
    "vicinity": "Piwna 3/4, Gdańsk"
  },
  {
    "geometry": {
      "location": {
        "lat": 54.34860510000001,
        "lng": 18.649178
      },
      "viewport": {
        "northeast": {
          "lat": 54.34864775,
          "lng": 18.64921515
        },
        "southwest": {
          "lat": 54.34847714999999,
          "lng": 18.64906655
        }
      }
    },
    "icon": "https://maps.gstatic.com/mapfiles/place_api/icons/restaurant-71.png",
    "id": "b05cad65f29bf936d380fe35736454561e0d5a1a",
    "name": "Mazel Tov",
    "opening_hours": {
      "open_now": false,
      "weekday_text": []
    },
    "photos": [
      {
        "height": 3040,
        "html_attributions": [
          "<a href=\"https://maps.google.com/maps/contrib/103421444230925834313/photos\">Bartosz Gęza</a>"
        ],
        "photo_reference": "CoQBdwAAAN4ovLnSTZ0lm0pMcYgy2ut71wneBFY__AM1IQeJZB1T4Ir2hJycApKk9SenqtT-6SK9IfC_uFUVRdhcxoBBY-xOP7SGXYGcO4eymVhdaIv5te8RkCuviKIwyMaJT2joKrcoMz7gD1eauxHvYSxWRweNxFluMqXsvbpJujZl6BL-EhBlCJcI80PmLP8GHes3gpPcGhTUQ_go8Mk9bSTCS6srJsYT2zs9Uw",
        "width": 4096
      }
    ],
    "place_id": "ChIJdX5wD59z_UYRbvNl5AsGbTw",
    "reference": "CmRRAAAAhfVrWXAxmoFs_LAq7LiVtUXvvDUgBFWj--omCtJrt91pu-Dll9qY2LW_USg6bkWL3wzqZhXJUT_VAk3dT_WTTFMll7DpOOo2SfFk2V9IN-mvD2QPhNkFm25fSHv8tObkEhCeJ3qNj_8D3NF-t4iNn2HkGhREdsotXowGTJSFJwC3htEPOU3xrw",
    "scope": "GOOGLE",
    "types": [
      "restaurant",
      "cafe",
      "bar",
      "food",
      "point_of_interest",
      "establishment"
    ],
    "vicinity": "122, Ogarna 121, Gdańsk"
  },
  {
    "geometry": {
      "location": {
        "lat": 54.3510232,
        "lng": 18.6496246
      },
      "viewport": {
        "northeast": {
          "lat": 54.3510694,
          "lng": 18.64986159999999
        },
        "southwest": {
          "lat": 54.3508846,
          "lng": 18.6495456
        }
      }
    },
    "icon": "https://maps.gstatic.com/mapfiles/place_api/icons/restaurant-71.png",
    "id": "38b3a9d3b00644a006324077c18b05e37114615e",
    "name": "Alanya Kebap",
    "photos": [
      {
        "height": 4224,
        "html_attributions": [
          "<a href=\"https://maps.google.com/maps/contrib/115057985490866100793/photos\">Arb Carson</a>"
        ],
        "photo_reference": "CoQBdwAAAGu7tlDJ6VAxy7lHbWF3AuQDnr7hONim6S7PMumwO-q9jYkN_YnET06WHsl0tLh89QzT-TwR2Agi1x8_zs_swkTmcKbBvsLzlMee1GiAo2V0iwZEs4kmcLGSL_MVCNXkkx8ajn3Os190lojcdbaNcxjfDtzm807GLo5qvIdvAjnhEhAfAv9a7lLaRxat9Rkvup8xGhQwj4_thjDOMcEzC9iQdDFuq--YIA",
        "width": 2368
      }
    ],
    "place_id": "ChIJV_e3zJ9z_UYRpYzNYZjZjFU",
    "rating": 3.6,
    "reference": "CmRRAAAAu3JG2g2kk0Z4H_hcYPbX4k24h4o_UVt8QyuI3I1DlP72BU7pNMmKouQlUaqg2-23oclyp-xDApnQ27V3-ro7LPs0ikRbP7KYK0s0cx338jDTtwA64g5wuexolpdLd2KGEhA_Hc0LtkYJbIw4DdCvlymNGhRKUYP-HSpb98Mn00NJs4pcSpPitg",
    "scope": "GOOGLE",
    "types": [
      "bar",
      "restaurant",
      "food",
      "point_of_interest",
      "establishment"
    ],
    "vicinity": "Kołodziejska 2, Gdańsk"
  },
  {
    "geometry": {
      "location": {
        "lat": 54.35122450000001,
        "lng": 18.6545009
      },
      "viewport": {
        "northeast": {
          "lat": 54.351279,
          "lng": 18.65464155
        },
        "southwest": {
          "lat": 54.3511602,
          "lng": 18.65407895
        }
      }
    },
    "icon": "https://maps.gstatic.com/mapfiles/place_api/icons/restaurant-71.png",
    "id": "a09fd8617a507f1d870c17302a69554e61c97bcf",
    "name": "Labeerynt",
    "opening_hours": {
      "open_now": true,
      "weekday_text": []
    },
    "photos": [
      {
        "height": 700,
        "html_attributions": [
          "<a href=\"https://maps.google.com/maps/contrib/111886582864671492545/photos\">Labeerynt</a>"
        ],
        "photo_reference": "CoQBdwAAAJCUPx7ZAr_3kBzUUoNpWgW615GIVFmVrSf0_WXE7j_mKNLbFCX4MsJXF_Xa97vCiQ1d0NrAtXpc6j4bDuC9FMtlvqkPNiJ2qHgkiepoyjfrmImG2qvaOnF44vFAOY1K0GyB3wdH2OwldK3WyjJENfV-tdr9k6uAZ-IEoRnCp7_pEhDIc9gGYS2n3Hyf0n42vmZbGhQpEBcEVvPFIU73z-MXa3i6U4V4iw",
        "width": 699
      }
    ],
    "place_id": "ChIJp9rEqgpz_UYRB1mY-FsdPu4",
    "rating": 4.6,
    "reference": "CmRSAAAAieK-vJ-9Xc2vhRXjcZXFYG4uHsuTvCau3HlsUTtgptr2-Ar1QejjUjRASVVr5745CduUcYu0V48OMfgZhH3EO1ttr9jXJSltg3Lpd5SZfuRC6VP2L80mLxovJxLdiAYyEhArPB4H9bwu_sjCl884m-XmGhT4qAyQSeR_LeQn8cOg0fifIknJMA",
    "scope": "GOOGLE",
    "types": [
      "bar",
      "restaurant",
      "food",
      "point_of_interest",
      "establishment"
    ],
    "vicinity": "Szeroka 97, Gdańsk"
  },
  {
    "geometry": {
      "location": {
        "lat": 54.350976,
        "lng": 18.655261
      }
    },
    "icon": "https://maps.gstatic.com/mapfiles/place_api/icons/bar-71.png",
    "id": "d4864efa4528afcd688b7890f068cb79351e2253",
    "name": "Craft Cocktails - Cocktail Bar",
    "opening_hours": {
      "open_now": true,
      "weekday_text": []
    },
    "photos": [
      {
        "height": 3456,
        "html_attributions": [
          "<a href=\"https://maps.google.com/maps/contrib/113379282117241797783/photos\">Craft Cocktails - Cocktail Bar</a>"
        ],
        "photo_reference": "CoQBdwAAAL49b3oRCnzNpMlWTsg2t5YmWJ3hIt9Y3T_LNnLv04cLD6NkhPPRYStE4ntNUaPYrI0DIY39Hrqi83wvhpjOGqlesnzqyMorEbxF-ljq5M6QnuHdyp0rHWQvlofpcS3Uxu3LwPrO-pzTsiBZiawTEsAP9w15EdPhSloe4u10ESxhEhACHIySttAODjcXAnMppPsBGhQVbuTwGlPq8nHnHGg0qozHPj0avw",
        "width": 5184
      }
    ],
    "place_id": "ChIJNV_pB6Bz_UYRT1FsLQOC4Io",
    "rating": 4.7,
    "reference": "CmRSAAAAAXAXaAisA8akOxBmiCUogvtNohiKv-iLoM8Js5B7VFGoWCJGsMY3PqYM7txK-Oxl4c9CiO4bEvC2Fk9HlxsvCbaP2dGjY0hD4ChsohyWzg43qtfA4IPBHjD2p1CV_3jMEhAwSUN_47SG65cXSmvw7kGHGhQObbFX4X601SmPao_dkrQhQkq3gw",
    "scope": "GOOGLE",
    "types": [
      "bar",
      "point_of_interest",
      "establishment"
    ],
    "vicinity": "Szeroka 48/49, Gdańsk"
  },
  {
    "geometry": {
      "location": {
        "lat": 54.350073,
        "lng": 18.656175
      },
      "viewport": {
        "northeast": {
          "lat": 54.35014684999999,
          "lng": 18.65621139999999
        },
        "southwest": {
          "lat": 54.35002585000001,
          "lng": 18.6561518
        }
      }
    },
    "icon": "https://maps.gstatic.com/mapfiles/place_api/icons/bar-71.png",
    "id": "dbddd3e112b838479755d6381f3dd63bd695bc47",
    "name": "Green Shake",
    "opening_hours": {
      "open_now": false,
      "weekday_text": []
    },
    "photos": [
      {
        "height": 400,
        "html_attributions": [
          "<a href=\"https://maps.google.com/maps/contrib/114595498257769972425/photos\">Green Shake</a>"
        ],
        "photo_reference": "CoQBdwAAAFG1Xi3Y0Dry28tNF7xbFJVhQjQbQVd0U1KkiEgOCUSs-Jqa0XGNdj5OUgLU62vtWQWm6G4uwsaepYJibzWlvKCJ-zAb8sHjGj1AOembbfzSmplTDOmgXbeGr71xvTpK3mKM_gn8F2kf-bfK7qf2H2Uy847wnHtf20GZT3V6H7c0EhDRs0Anapi94BxSCQlyc7N_GhR3kou860YN1Bxnp4EK39lSwkVYlg",
        "width": 1400
      }
    ],
    "place_id": "ChIJCa_GbaBz_UYRF0jk2PDvvqw",
    "reference": "CmRSAAAAvbCjM_gwh04sNjUXe3UOkOZVWXKZLfb1YFTGRKX84EF9UEJcCaVPAwFvyfKGoi2cA1qTbIQws6ILRLdoK6PsabeQuv2kqSM_I0isXz7YVHpCYuO9pRO7ZnRVqTJjCJn5EhCCvzG-qW3CNIieLpu8vBU3GhTsRRElhalCmzjtbLHJa_DdVSuiQw",
    "scope": "GOOGLE",
    "types": [
      "bar",
      "point_of_interest",
      "establishment"
    ],
    "vicinity": "117, Świętego Ducha 115, Gdańsk"
  },
  {
    "geometry": {
      "location": {
        "lat": 54.3531021,
        "lng": 18.6517218
      },
      "viewport": {
        "northeast": {
          "lat": 54.35327999999998,
          "lng": 18.65182275
        },
        "southwest": {
          "lat": 54.3530428,
          "lng": 18.65168815000001
        }
      }
    },
    "icon": "https://maps.gstatic.com/mapfiles/place_api/icons/bar-71.png",
    "id": "1bcec10563e57166458ff99d3f7bad937deaa60b",
    "name": "Kebab Jerusalem",
    "opening_hours": {
      "open_now": true,
      "weekday_text": []
    },
    "place_id": "ChIJWxOcDHVz_UYRcap8Ia1vk60",
    "rating": 3.6,
    "reference": "CmRSAAAAcdR6zj-Ur2G_mI3jYwzChjs4ZRZMcnftJhGUWQfQkPENv88UZltJVQTJO609W6sI9MPLGS3pPZahDPGK0Ijw6j5hS9MMcJPECG0UY6EWwQnnUh4SCwJVWo0BuGJf2BuVEhBBON77q_vuugf8hHUjRZO6GhRPLpQDgcNTL5k7aB3sV7iSw14FLg",
    "scope": "GOOGLE",
    "types": [
      "bar",
      "point_of_interest",
      "establishment"
    ],
    "vicinity": "80 845, Podwale Staromiejskie 10, Gdańsk"
  },
  {
    "geometry": {
      "location": {
        "lat": 54.35312099999999,
        "lng": 18.65244999999999
      },
      "viewport": {
        "northeast": {
          "lat": 54.3531456,
          "lng": 18.65272705
        },
        "southwest": {
          "lat": 54.3530472,
          "lng": 18.65235764999999
        }
      }
    },
    "icon": "https://maps.gstatic.com/mapfiles/place_api/icons/bar-71.png",
    "id": "64ff42577ca598a06833484721ffa90db23a6c00",
    "name": "Kebab Bar \"WHY NOT!\"",
    "opening_hours": {
      "open_now": true,
      "weekday_text": []
    },
    "photos": [
      {
        "height": 512,
        "html_attributions": [
          "<a href=\"https://maps.google.com/maps/contrib/110987045534587334581/photos\">Kebab Bar &quot;WHY NOT!&quot;</a>"
        ],
        "photo_reference": "CoQBdwAAACUZyGnLKNwql7SWC88cNhucEQ-n4FpnSjgV9dfAcR51LpAcoAmYZvr-GgqN2WsCYp9Lh-6Tf2VezULPcleOV55-K2tUXVg1W3I-xBRCCBSvxDZU-LMNV4E-Z3jynyFIqlxhAaSavMd1BKzbO5_3b4K2QAC0SLSL-fpi7pEYeG5fEhBkpjN3zekOzJP1CBITGVVtGhQnU4lTv_pYHCwL7hcvLXppYx-lMA",
        "width": 511
      }
    ],
    "place_id": "ChIJ5choEnVz_UYRx-CT7tpFr2w",
    "rating": 3.8,
    "reference": "CmRRAAAAAM4Q2gQ-Dy6wHPqchZaBRd5J62oPwq4IKiWm4MfLgjVUJsAA9vtndFTghN5jiSf4Z02g6VyeXCCGm0XPdy914Hdzi-kGorOHV-6kVPA7iH0V3Zv76_4I1O3vZhl7rKI0EhADWYiYs-xLhp07cVli-5A3GhTeo5tOA6Y2-eY9xJL2axPX8y3Egg",
    "scope": "GOOGLE",
    "types": [
      "bar",
      "restaurant",
      "food",
      "point_of_interest",
      "establishment"
    ],
    "vicinity": "Plac Dominikański 1/15, (naprzeciwko Kręgielni U7), Gdańsk"
  },
  {
    "geometry": {
      "location": {
        "lat": 54.3526407,
        "lng": 18.647047
      },
      "viewport": {
        "northeast": {
          "lat": 54.35266295,
          "lng": 18.6475696
        },
        "southwest": {
          "lat": 54.35257395000001,
          "lng": 18.6468728
        }
      }
    },
    "icon": "https://maps.gstatic.com/mapfiles/place_api/icons/bar-71.png",
    "id": "75ed26e494d7cc799600d43a2e687d3ab42cb846",
    "name": "Oliwa Do Ognia",
    "opening_hours": {
      "open_now": false,
      "weekday_text": []
    },
    "photos": [
      {
        "height": 5312,
        "html_attributions": [
          "<a href=\"https://maps.google.com/maps/contrib/117681332275246369444/photos\">Gosia Klimek</a>"
        ],
        "photo_reference": "CoQBdwAAAMioFfsgNJpV6Hp_iOiEyJZFlxCotgS-ul2F5r2jYSwfimlJ-_EBkaiIGJv4UiJFSDoUljFUOEqrpCMjTizIlRraOwy5UfOE9kEvRA21icgWWpNHaXCYdzr6UbmTlcJOcEawwKYdemw532s9ujNK_Wr6aPXkm-yh7_2A7ARGNpKWEhDJGi2gLtvwxUEtpNENWs0IGhQGAt754IyEJ85Z60mUN3TZFz_6yw",
        "width": 2988
      }
    ],
    "place_id": "ChIJu2eX-XVz_UYRtwRIiQbIvTY",
    "rating": 4.5,
    "reference": "CmRRAAAASgbZIASuv-5LAFNUmhfMabpxv_ax4w3VA8CVcH_ZsCmaFZI1py570Rlt46oqVAihcXFyVfwwk9kFHaRNrbFXdzU-xGmdaOtPmLwur_kjhTwOk-GvsfMHZVl5uiZXftGTEhDWU6JPHJuP6xUwsGrkVvP9GhRgVqZ8fFvbKBzr-lAhZX49QQOKaw",
    "scope": "GOOGLE",
    "types": [
      "bar",
      "point_of_interest",
      "establishment"
    ],
    "vicinity": "Garncarska 10/16a, Gdańsk"
  },
  {
    "geometry": {
      "location": {
        "lat": 54.354605,
        "lng": 18.646009
      },
      "viewport": {
        "northeast": {
          "lat": 54.35466315,
          "lng": 18.64605229999999
        },
        "southwest": {
          "lat": 54.35455255000001,
          "lng": 18.6459491
        }
      }
    },
    "icon": "https://maps.gstatic.com/mapfiles/place_api/icons/restaurant-71.png",
    "id": "22e0ac267550af7533509fe44bb09e12acb76735",
    "name": "Piła Ryba",
    "opening_hours": {
      "open_now": false,
      "weekday_text": []
    },
    "photos": [
      {
        "height": 3161,
        "html_attributions": [
          "<a href=\"https://maps.google.com/maps/contrib/106835265019651927605/photos\">Piła Ryba</a>"
        ],
        "photo_reference": "CoQBdwAAAAI0BHlR4NQyqpmEsuSrDeR5WJBAq9EZsILROfQ1LyMYiM9HY5T1l-BWt1ZTLyJv4yC147x4GuWTpoRHXUuYM6B-nKgqrq_0OJUZxKgEfECawzU1jj1ofrOsgyFUs3_YXNXL5xFi7II8pM3KHjbdlXnceAU7zeBH--fzJeWgrUFJEhDGqn_BwuTEvKiA71SKiIoOGhTJG0FGiUYewbo4SNYxuOKyyoLkIA",
        "width": 4731
      }
    ],
    "place_id": "ChIJlSkXbXZz_UYRiqT9eXhc6G4",
    "reference": "CmRRAAAAHlePPdZpuMPzAtwseRbvLKTaJ8dPE0hAAulREF8kvRKGZrLbyo371ifUq0ZpmCEqz_XW-TD19EOsEWbSVwXVEYLQDZFoRBCr7aPobysv3M9aFdpn5IGxdp3m0WhQ0aIqEhDKtV8BiG_gGdyiRu058qnvGhQZ6pAqgpl_zUKyTCbm60EImCurbw",
    "scope": "GOOGLE",
    "types": [
      "bar",
      "restaurant",
      "food",
      "point_of_interest",
      "establishment"
    ],
    "vicinity": "Karmelicka, Elżbietańska 1, Gdańsk"
  },
  {
    "geometry": {
      "location": {
        "lat": 54.3559029,
        "lng": 18.651187
      },
      "viewport": {
        "northeast": {
          "lat": 54.35653845,
          "lng": 18.65138165
        },
        "southwest": {
          "lat": 54.35569105000001,
          "lng": 18.65060304999999
        }
      }
    },
    "icon": "https://maps.gstatic.com/mapfiles/place_api/icons/restaurant-71.png",
    "id": "b0ede7671911d3dd215a4f84aeeb07b8974dbb04",
    "name": "Winestone",
    "opening_hours": {
      "open_now": false,
      "weekday_text": []
    },
    "photos": [
      {
        "height": 1247,
        "html_attributions": [
          "<a href=\"https://maps.google.com/maps/contrib/112323449268560375467/photos\">Winestone</a>"
        ],
        "photo_reference": "CoQBdwAAAIkyKim9qZbHKx9im8cqk1E4FTBmc9ZaQjF3ucyyMEms3v56oMI7mW3Nr5WCOQqZsxNZ3H-yfHgfPudUahxjBAgLWcW-UsPLn3s5T_eapQbWBKztXXk5tHZnEZOTQySvXKYKymkAiTnqgbIbrje2f1eS4c4lHfz5Wypnex7w9-8_EhDSmX105YxMHV4jpBo2c9YhGhRaWcyJ-n_2kkSI55THdDEmTFOGlg",
        "width": 1247
      }
    ],
    "place_id": "ChIJEbovQHRz_UYR_zsAcU11x2o",
    "reference": "CmRRAAAAwOABFV-FH7LhVY-PdYbL14Ybl3nRVnqnWSCb7UjoyfvEpy2NI8BhZIUFqr5_z1UQ5PYEBCMDMt1OLC_Vp5UkD1Mxh1D9pufLq1WFgmaIVOr4u01xLL60LfL7e9Iymb7zEhAoEdtAchEXUowcECJcDyc2GhRw2f-EraIyVTU1jqDsPVIeFwx77w",
    "scope": "GOOGLE",
    "types": [
      "restaurant",
      "night_club",
      "bar",
      "food",
      "point_of_interest",
      "establishment"
    ],
    "vicinity": "Jana Heweliusza 22, Gdańsk"
  },
  {
    "geometry": {
      "location": {
        "lat": 54.36085899999999,
        "lng": 18.648559
      }
    },
    "icon": "https://maps.gstatic.com/mapfiles/place_api/icons/bar-71.png",
    "id": "2c0c1e0b07509385979b89cf1118b230a2a59ea2",
    "name": "Elektron Bar",
    "opening_hours": {
      "open_now": false,
      "weekday_text": []
    },
    "photos": [
      {
        "height": 1280,
        "html_attributions": [
          "<a href=\"https://maps.google.com/maps/contrib/115016038586322596175/photos\">ANCA Irimia</a>"
        ],
        "photo_reference": "CoQBdwAAAIPg8cI1mEO-8Q-B7PVVSIyy48nbWNdwTXpczT99HWw9rHwdOApO0PDQ6Qb2h3yqvE3Z_NQEcPiPjAJmrQRNG5OMJiCLlIDywh3Cl1wuhLDUb0qucf6_Y19x9JL3zByzPBgNZSADFuUOJhOSyEO6_xKx0_T0bJft3fe4dZgErLxZEhB_p3VomcQKhql-gD0RbgSNGhRXIDRTjh4HR_skV0weaXFS-k_GUw",
        "width": 720
      }
    ],
    "place_id": "ChIJ74JysXFz_UYRGeLXb3joAnY",
    "reference": "CmRRAAAAca6L4ikQVIjRCPv_YSPE7Vt0Ji7J4l391R3_JxTo6tqU3MWb-9pZFeYvWwd9foH_GGfZIA3yZxqtORbNvONkj29txwO_Skjdwq4kuW7siCQxuijrYh62uUsSpms-7fd1EhCTbo9yiQVzp9Ex7ZJH3an-GhTnsOwwSVxLPErRGE0g3W9pqVHWkw",
    "scope": "GOOGLE",
    "types": [
      "bar",
      "point_of_interest",
      "establishment"
    ],
    "vicinity": "Budynek Europejskiego Centrum Solidarności, Plac Solidarności 1, Gdańsk"
  },
  {
    "geometry": {
      "location": {
        "lat": 54.3487924,
        "lng": 18.6546563
      },
      "viewport": {
        "northeast": {
          "lat": 54.34890280000001,
          "lng": 18.65471420000001
        },
        "southwest": {
          "lat": 54.3487556,
          "lng": 18.65463699999999
        }
      }
    },
    "icon": "https://maps.gstatic.com/mapfiles/place_api/icons/bar-71.png",
    "id": "f9727b99cdf0fa8bde24cc4c42cd40fb96c3d927",
    "name": "U Szkota",
    "opening_hours": {
      "open_now": true,
      "weekday_text": []
    },
    "photos": [
      {
        "height": 2322,
        "html_attributions": [
          "<a href=\"https://maps.google.com/maps/contrib/107032275168632777787/photos\">Krzysztof Ossowski</a>"
        ],
        "photo_reference": "CoQBdwAAACviVhGYlTvmM_sBJqy6IaZB9vIn6fho6-coP-uEgO94SgijI8NyRUoxj5tvI9RrmNI7s1Y-y3STLPa-b87ijL40ROrOfduzQYsFACBzGriBuY-NJIjV9sDXJc04Cq-agJU3ogTFc6nvVrbfjbZWTjzlthrMV0Odq7c30lSzt1m0EhAPW4tl81qGfRdKDw4aYn7AGhRq5N1bgQBPaBECtk5GrUrVNb6JHg",
        "width": 4128
      }
    ],
    "place_id": "ChIJ5evHN6Bz_UYRoyIF6no5jiA",
    "rating": 4.3,
    "reference": "CmRRAAAAWbJCzN4dxT6hR7gavjdm_9zu4X_ch6-M6zcouEtz6C_FjTSvUcCSRUgUt0uqgu9yVcYWDyQptpXC8rVMiTLRhCA5chi7QmGVUR0ocWJ4kPyd12CbJ4QEF1W0zG5-0yAXEhDX3gfKOYCTm2zoG5KXr__1GhRSbY3y8KusbzZ6vUBoK55dCagN4g",
    "scope": "GOOGLE",
    "types": [
      "bar",
      "point_of_interest",
      "establishment"
    ],
    "vicinity": "Chlebnicka 9/10, Gdańsk"
  },
  {
    "geometry": {
      "location": {
        "lat": 54.364155,
        "lng": 18.6454162
      },
      "viewport": {
        "northeast": {
          "lat": 54.36421609999999,
          "lng": 18.64543695
        },
        "southwest": {
          "lat": 54.36409250000001,
          "lng": 18.64539594999999
        }
      }
    },
    "icon": "https://maps.gstatic.com/mapfiles/place_api/icons/restaurant-71.png",
    "id": "64b3338a2faa368af642d6cc11d91609cfa3d80b",
    "name": "Pub Montażownia",
    "place_id": "ChIJo9lSVGVz_UYRCzrRZZU3tgo",
    "reference": "CmRRAAAAFWFi-V2IKBvwoGZd123dh2eYfW4YSoKy_0OO4S-OVzAt_sS1e9qb_OF8zvb_r6fZVWI7Wi0Jk7IKRWnj_9-FoCTR0HtQhy1a2RlzABAhQ4m58kt4JzhxD4Agg7ZPm-x1EhA7G8ymU2m14Br2VUrMu45iGhS7PB8KTD1qfG5pFwGfCnRpYJGUYg",
    "scope": "GOOGLE",
    "types": [
      "bar",
      "restaurant",
      "food",
      "point_of_interest",
      "establishment"
    ],
    "vicinity": "Stolarzy, Gdańsk"
  },
  {
    "geometry": {
      "location": {
        "lat": 54.34922410000001,
        "lng": 18.6557598
      },
      "viewport": {
        "northeast": {
          "lat": 54.34970139999999,
          "lng": 18.6559839
        },
        "southwest": {
          "lat": 54.34906500000001,
          "lng": 18.6556851
        }
      }
    },
    "icon": "https://maps.gstatic.com/mapfiles/place_api/icons/bar-71.png",
    "id": "4e908e513782a058b3a1be4311087ead0ac9977c",
    "name": "Mariacka. Bar bistro. Koszałka R.",
    "place_id": "ChIJTSvmQ6Bz_UYR_wsEXWqFGko",
    "reference": "CmRRAAAAo2XAZID3mzEYUd4f-7G98ojI-ime2OkgUSh0EgxudWonPmGzHr1BB1LRvsNkbo9JZGgIDbZqDIZCDQD4v4uzJAyy5_q0A5tv3onW0EQcIfI6OO7e9Ru4ImQlPdKvLnaDEhDnP_Iq1Hetjos_BuJ1NHx_GhTuE_l-iRFir1i81O5LtwDm2f6Grw",
    "scope": "GOOGLE",
    "types": [
      "bar",
      "restaurant",
      "food",
      "point_of_interest",
      "establishment"
    ],
    "vicinity": "Mariacka 21/22, Gdańsk"
  },
  {
    "geometry": {
      "location": {
        "lat": 54.35204,
        "lng": 18.657821
      }
    },
    "icon": "https://maps.gstatic.com/mapfiles/place_api/icons/bar-71.png",
    "id": "8bc71edbaeae18f57d8760205f0f978bdcb93e01",
    "name": "Vino&Panino",
    "opening_hours": {
      "open_now": true,
      "weekday_text": []
    },
    "place_id": "ChIJK5pKkwpz_UYRsq2QU7mUook",
    "rating": 4.1,
    "reference": "CmRSAAAAasrSG7LpiZ3YKcJDxJF08lYCKWAHceQho6nS3S36IIOZS8N-VooL8hTJtPW_txspouqpDlxvclR3Disa3dESgXgAL0_m7vGRe9YFMinTVAyYUjGjYbvuDFVKiN-W5bX-EhDS44BJxk9fWttX0zhCI8BDGhRP9WYxW1RKO6MkniaSEADvlwm79Q",
    "scope": "GOOGLE",
    "types": [
      "bar",
      "point_of_interest",
      "establishment"
    ],
    "vicinity": "Rybackie Pobrzeże, vis a vis parowca SS Sołdek, Gdańsk"
  },
  {
    "geometry": {
      "location": {
        "lat": 54.3527673,
        "lng": 18.6530095
      },
      "viewport": {
        "northeast": {
          "lat": 54.35277735,
          "lng": 18.65317025
        },
        "southwest": {
          "lat": 54.35273715,
          "lng": 18.65252725
        }
      }
    },
    "icon": "https://maps.gstatic.com/mapfiles/place_api/icons/bar-71.png",
    "id": "b9624671d41e9e491219409f14741f0585914046",
    "name": "Cafe Lamus",
    "photos": [
      {
        "height": 2160,
        "html_attributions": [
          "<a href=\"https://maps.google.com/maps/contrib/107878094994272872924/photos\">Piotr Marszałkowski</a>"
        ],
        "photo_reference": "CoQBdwAAAC-n7irT2hta34St3hdyR-o9Iy2oE2rrYSOiIpjGvb6-7fPnySwQNGQv9HRipMcAJBQMsl5LZlAhQ5DC-oDydVdtHEuFwKhFu_jsb8N4IPHL4tEU_WJqUX3aWbRWB06uexc_ILqZ57Lt-_cuY4MfsHMpugXlzd5PEgCNCkhy1inXEhA11oLB_Snf6Cu9qxsO74ivGhTWtNUOCIXco6sov2oFwPnTp-dARw",
        "width": 3840
      }
    ],
    "place_id": "ChIJ0W_LFHVz_UYRvi0h1nQ0or4",
    "rating": 4.6,
    "reference": "CmRSAAAAGTbUUAgW7fXudCP7Eu52baAMwP6twBwnH85ftW3rrR3Dvzpp6jNGp2_ltjcR-MijrJVsE6kZIu8V67Z-nFtJkdAla10Fnq0IBge8FltrhoPD-xH40vN7-VOAOhe-PQ29EhCnEfQ6hXmLaEpilnaqC80zGhTnJyAUPaXoYn1bf3AFEyo0-FfygQ",
    "scope": "GOOGLE",
    "types": [
      "cafe",
      "bar",
      "food",
      "point_of_interest",
      "establishment"
    ],
    "vicinity": "Lawendowa 8, Gdańsk"
  },
  {
    "geometry": {
      "location": {
        "lat": 54.3493,
        "lng": 18.65220489999999
      },
      "viewport": {
        "northeast": {
          "lat": 54.3493882,
          "lng": 18.65230099999999
        },
        "southwest": {
          "lat": 54.34927059999999,
          "lng": 18.65191660000001
        }
      }
    },
    "icon": "https://maps.gstatic.com/mapfiles/place_api/icons/bar-71.png",
    "id": "ee56ac1bffb013a50f0a12d8d0267d2886d00fbf",
    "name": "Pub/bar place with garden that face the Town Hall tower",
    "place_id": "ChIJUUC8hZ9z_UYRfNNPezCxUWM",
    "reference": "CmRRAAAAWJ-QaglvdmMkbL2G3tLEY9z-wGocAarkXFPcO0tsX9Qd5lYgJLTOegz2xXxKWnEPq8zvMkblmy9UcAJJff9U7vu5wiLKnlyne9LmOm7t7GsTY-DWmfYvu4eKGmgdwdmUEhA1FdRGjrCr6HsQ7kVCVqj7GhQqYWRuEYU-h8hUZFkn7LESnlsisA",
    "scope": "GOOGLE",
    "types": [
      "night_club",
      "bar",
      "point_of_interest",
      "establishment"
    ],
    "vicinity": "Kaletnicza, Gdańsk"
  },
  {
    "geometry": {
      "location": {
        "lat": 54.349912,
        "lng": 18.651715
      },
      "viewport": {
        "northeast": {
          "lat": 54.3499512,
          "lng": 18.6517511
        },
        "southwest": {
          "lat": 54.3498404,
          "lng": 18.65164910000001
        }
      }
    },
    "icon": "https://maps.gstatic.com/mapfiles/place_api/icons/bar-71.png",
    "id": "7d3817ce518d9b91e07b6bb60445458952f4a6cd",
    "name": "LUMI SHOT BAR",
    "photos": [
      {
        "height": 3024,
        "html_attributions": [
          "<a href=\"https://maps.google.com/maps/contrib/104739413334316290928/photos\">SANDHEEP KUMAR V B</a>"
        ],
        "photo_reference": "CoQBdwAAAADgj2qTHoPnMcCwvihsjP86mg3jjJPVV02riTk10ZY1Ge2wGoX7tJ2VK-UuNOVfcH3Nmd7VXFMnYQow-D8ujYnNDBFNw1W2O4mbCV5B13H7GVEiMK0SMKWqrt_mWELTocatSRN4Z51A3MbDQnrEtEeXyJ5UsROba77A-WJi-TiKEhAa0S3QhCqFulrQlAAkU_CkGhTsjHw2RQKjp_tR-0jlQ6UCwe1xfw",
        "width": 4032
      }
    ],
    "place_id": "ChIJz5r1k59z_UYR3swpf2gk_tI",
    "rating": 4.5,
    "reference": "CmRSAAAA__4HDQihHpZ-WIKup1JbV51xE1apxzxwnJsTclQhoHGMzC4JOUERb-W1hXW8lZYFOIzn4xBo7GMJYKfd8e6OMwFRmSX6WWiI-6MRROLhSAqg_3kCPDAqUpg0vMae7pZCEhALpkxrgwSqmUJwllHfSxnWGhTxXYE8nQ-KbkTZhQs8yyFsxtQc-g",
    "scope": "GOOGLE",
    "types": [
      "bar",
      "point_of_interest",
      "establishment"
    ],
    "vicinity": "UL. /53, Piwna 52, Gdańsk"
  },
  {
    "geometry": {
      "location": {
        "lat": 54.3507682,
        "lng": 18.6515725
      },
      "viewport": {
        "northeast": {
          "lat": 54.35081865000001,
          "lng": 18.65161495
        },
        "southwest": {
          "lat": 54.35070564999999,
          "lng": 18.65151995
        }
      }
    },
    "icon": "https://maps.gstatic.com/mapfiles/place_api/icons/restaurant-71.png",
    "id": "0bbf81e51391bdff6f4e72b5bf4d186a82a92819",
    "name": "Irish Station. Pub",
    "place_id": "ChIJ21T2wp9z_UYRjq5jrb7kaC4",
    "reference": "CmRRAAAAfk2Y2NERgBJLNcxs4nN9OS-RP2bfjAq-gnCFFrW5fr7kcmXsvUg_zZKd4BYRqsr-o2aDJQqC_i7qFuFx47HILV7Q8f02c_JGNnO_fvmdPnNOvG-yukfawpnHrLIzGOyzEhAXNfuX-2zaOESmBkzvFFruGhROJ1OWYEM1hyHHbU_54oEmdUzXRg",
    "scope": "GOOGLE",
    "types": [
      "bar",
      "restaurant",
      "food",
      "point_of_interest",
      "establishment"
    ],
    "vicinity": "Świętego Ducha 41, Gdańsk"
  },
  {
    "geometry": {
      "location": {
        "lat": 54.3482857,
        "lng": 18.651343
      },
      "viewport": {
        "northeast": {
          "lat": 54.3484485,
          "lng": 18.6514766
        },
        "southwest": {
          "lat": 54.3477973,
          "lng": 18.6509422
        }
      }
    },
    "icon": "https://maps.gstatic.com/mapfiles/place_api/icons/restaurant-71.png",
    "id": "5f6bc50605918e201ec6a1241d0b987c332f784f",
    "name": "Omnom",
    "opening_hours": {
      "open_now": true,
      "weekday_text": []
    },
    "photos": [
      {
        "height": 801,
        "html_attributions": [
          "<a href=\"https://maps.google.com/maps/contrib/117801368560443829450/photos\">Infinite08PL</a>"
        ],
        "photo_reference": "CoQBdwAAAGYBU06mfna8ENBTXEHhUg8tPYUy0Pe46NsG5FrkPvrlQV_pOCwHJs-SPUk1-hxdoNA8bVas6OYQl-LSawQwNlZig9YWYJyAs9fUZHo_Kv1r6uz4zvlgAB5keXVdtIZNggOrLu9KCf-hy_xTIhUf6ATc7dPe-Nn_HWbbRddWEHi7EhA1SHju8P2PIqWRCj3EIOfmGhRPbALmPYY60GJmVDG4ZqCl1nmQsw",
        "width": 1200
      }
    ],
    "place_id": "ChIJQ2r5ep9z_UYRl0CEVbjA6iY",
    "reference": "CmRRAAAAUVePX7GOu9jOYMGo17mx3Fza2efQQvHT_-KP7NPEW1rU22OAIG3j9zKMjoV9xVz5FUECZRw-WR6hne5Dax-mr0MrdCjcOAW65wGYxJQKiDuaks3pTsy4eL9S1ujAyvIoEhDoHzJ_fRlq7-PosFWvFTyvGhQ3tp6zpVBM3Yv4MG4UTibc1guFyw",
    "scope": "GOOGLE",
    "types": [
      "night_club",
      "bar",
      "restaurant",
      "food",
      "point_of_interest",
      "establishment"
    ],
    "vicinity": "Ogarna 107, Gdańsk"
  },
  {
    "geometry": {
      "location": {
        "lat": 54.35095639999999,
        "lng": 18.6507506
      },
      "viewport": {
        "northeast": {
          "lat": 54.35099495,
          "lng": 18.65078055
        },
        "southwest": {
          "lat": 54.35088035,
          "lng": 18.65069154999999
        }
      }
    },
    "icon": "https://maps.gstatic.com/mapfiles/place_api/icons/restaurant-71.png",
    "id": "ac76c2c49dd22b0fcd7508ea94497f11897622f0",
    "name": "Alkotraz Shot Bar",
    "opening_hours": {
      "open_now": true,
      "weekday_text": []
    },
    "photos": [
      {
        "height": 531,
        "html_attributions": [
          "<a href=\"https://maps.google.com/maps/contrib/101766063814117802125/photos\">Alkotraz Shot Bar</a>"
        ],
        "photo_reference": "CoQBdwAAAPdDqG2QljEUgkdrOIdVIc--6BqtxBnBEhGQE3z-t24TvMQJ0H7HPlYCyX9ANlOVdl3nk2_z0vM82NDgxVap9M5E1epo1ML2gYH-6AvSupa56T538CSbHmnhirHHAZr7UpJJGpB8s-TpVuzbMTXQUMLvy-267VY_VA5EPLq4O17bEhAfADtyZhYRZ2uT1ZEfLBY5GhQtZfzqnrg9tZg_43XwcDafdvNLsA",
        "width": 532
      }
    ],
    "place_id": "ChIJq2SLz59z_UYR4XvUXYS1CYU",
    "reference": "CmRSAAAAqlbl_AD_gnrU-QMhHhW4XOFFwNT7QuRfNen4ReoyQaFVdzh8Dsc9goqLSY39XD2y4TwG_SUTckTfrkWxPfVMnHkX2iyNljw8Qra2JyIQkrcl0WpqwLq5GnbymMrX25jAEhAMSGvYedj-Pz_qj-n5a6IRGhTNqXNCqzf-xU24Sbr3k0CIZxQ7hA",
    "scope": "GOOGLE",
    "types": [
      "bar",
      "restaurant",
      "food",
      "point_of_interest",
      "establishment"
    ],
    "vicinity": "Świętego Ducha 14, Gdańsk"
  },
  {
    "geometry": {
      "location": {
        "lat": 54.3483126,
        "lng": 18.6540527
      },
      "viewport": {
        "northeast": {
          "lat": 54.34835219999999,
          "lng": 18.6540796
        },
        "southwest": {
          "lat": 54.34823499999998,
          "lng": 18.65400000000001
        }
      }
    },
    "icon": "https://maps.gstatic.com/mapfiles/place_api/icons/bar-71.png",
    "id": "6a45119b6162ce1305c8a2a16c5f19500dd8eb50",
    "name": "pułapka",
    "place_id": "ChIJAQBAy6Fz_UYRe52wp5e6Hu4",
    "reference": "CmRSAAAAAb6m5xaqWsoHrKUEK9SRCZjP4xiyD6YQ15IZO5dsZmClUp84dRaJPFI69YncE_X8ZfAJg1X024WgK0llskWcecd1VC1V_9JOW4AUOotL6Ko6xY-zqa8N24L_EoSfpt2jEhByVPYHYGDHpH_Xv4tIML2GGhS6x8KrOCKI1xUZQdxZwKn6YYnyLg",
    "scope": "GOOGLE",
    "types": [
      "bar",
      "point_of_interest",
      "establishment"
    ],
    "vicinity": "Długi Targ, Gdańsk"
  },
  {
    "geometry": {
      "location": {
        "lat": 54.3503698,
        "lng": 18.6496689
      },
      "viewport": {
        "northeast": {
          "lat": 54.35051425,
          "lng": 18.6498234
        },
        "southwest": {
          "lat": 54.35032165,
          "lng": 18.6496174
        }
      }
    },
    "icon": "https://maps.gstatic.com/mapfiles/place_api/icons/cafe-71.png",
    "id": "4aa67d01b087e11b0b1b86d6b04076ea784dc6e3",
    "name": "Café Józef K.",
    "opening_hours": {
      "open_now": true,
      "weekday_text": []
    },
    "photos": [
      {
        "height": 2448,
        "html_attributions": [
          "<a href=\"https://maps.google.com/maps/contrib/102894015194363208994/photos\">Marten Voulon</a>"
        ],
        "photo_reference": "CoQBdwAAAC0ePJp_qTK5tIUZjN1Kj5B7YnTf81pN2tNGailxNDgdayB_ZG-UroJdGRy2JI4IW4egEbM6fh4ZcQc9L3fXfKeQt-F5rPrv_lHv6y4aeEg7HaNYKti69OUbdHoEwgY4ZSMXHyVrjq5nEWMbM5pNwFvLK-JBHHUT_ps1QS2ia6p-EhDHUcp3-gVS7OGV7WEY7SKsGhQECGnr3bRhyrHLd0xe1cpxrLLGgg",
        "width": 3264
      }
    ],
    "place_id": "ChIJNy7BtZ9z_UYRIzsKR09CAsA",
    "rating": 4.6,
    "reference": "CmRSAAAADGAtq1sfOlN0E4DB7mk-XKJlrnLGs8FTvBL1_CzoY67e--yWD8IgeqyqTbBGdK4dXzxsB1NYs9S7u5lfx8UOxBwtqgqKNNlHbuBJZDorJss7SbKwY8AkFmeOeuBGzNPjEhDxhsxy7RWT_7QM6uLiIb6UGhQcXpbOVJxdUltO8Jp0zODKzmSLIA",
    "scope": "GOOGLE",
    "types": [
      "cafe",
      "bar",
      "food",
      "point_of_interest",
      "establishment"
    ],
    "vicinity": "Piwna 1/2, Gdańsk"
  },
  {
    "geometry": {
      "location": {
        "lat": 54.3493498,
        "lng": 18.6491854
      },
      "viewport": {
        "northeast": {
          "lat": 54.34946754999999,
          "lng": 18.6492571
        },
        "southwest": {
          "lat": 54.34931055,
          "lng": 18.6491615
        }
      }
    },
    "icon": "https://maps.gstatic.com/mapfiles/place_api/icons/bar-71.png",
    "id": "08a74d648ab010b10b885c9315d97a79eff672a8",
    "name": "Karotka s.c. Jaracz Ż., Sikora W.",
    "place_id": "ChIJ71qUqZ9z_UYRwxei-eQpb-Y",
    "reference": "CmRSAAAA4hI7r-FWps1SsatilyL1__BHLVObwABMM2EQu8-pWzfJswspceon9K5z3FHY32Aucv2TePPtaIn1h1vR_8CB3XIAZACYGsqSqlcNK0sOKVqa8jcQ26Up2SHgqZi8HUv0EhC7Iuf7bfn8DA4_wc7iUaVIGhRnSjFbNrVQ23ggTCphaHsaO75m3Q",
    "scope": "GOOGLE",
    "types": [
      "bar",
      "point_of_interest",
      "establishment"
    ],
    "vicinity": "Długa 11, Gdańsk"
  },
  {
    "geometry": {
      "location": {
        "lat": 54.35115769999999,
        "lng": 18.6543753
      },
      "viewport": {
        "northeast": {
          "lat": 54.35124664999999,
          "lng": 18.6544296
        },
        "southwest": {
          "lat": 54.35112805,
          "lng": 18.6543572
        }
      }
    },
    "icon": "https://maps.gstatic.com/mapfiles/place_api/icons/bar-71.png",
    "id": "6bb7a76746583e2407e77db8420a19ce6167a752",
    "name": "LaBeerinth",
    "place_id": "ChIJUwIMAKBz_UYRnXSX93YT4Ts",
    "reference": "CmRRAAAA56bdZt7-9Yv-GoaxlsH6d4p3mSeoanxKzUbvRyCzXV_Ixn-R5GugWiUGtl7ZklzuJosy6hsUoD-75maXTVPQg71dNsnA_6VJ1tjpZT90mdYPLpPDhtHtCITtTCYqsd2AEhDpL4W_RrS2qj8UiD1m4a66GhQMNsnpv4McjNKvj1VF7Um6_OBLBQ",
    "scope": "GOOGLE",
    "types": [
      "bar",
      "point_of_interest",
      "establishment"
    ],
    "vicinity": "Szeroka 97, Gdańsk"
  },
  {
    "geometry": {
      "location": {
        "lat": 54.35116499999999,
        "lng": 18.654477
      },
      "viewport": {
        "northeast": {
          "lat": 54.35122864999998,
          "lng": 18.65451629999999
        },
        "southwest": {
          "lat": 54.35111005,
          "lng": 18.6544439
        }
      }
    },
    "icon": "https://maps.gstatic.com/mapfiles/place_api/icons/restaurant-71.png",
    "id": "fc468151e7a9c693ed6fbc2be3149d8aa1695cc8",
    "name": "Polskie Kino",
    "opening_hours": {
      "open_now": true,
      "weekday_text": []
    },
    "photos": [
      {
        "height": 2368,
        "html_attributions": [
          "<a href=\"https://maps.google.com/maps/contrib/114907728748340283345/photos\">Maciej Banach</a>"
        ],
        "photo_reference": "CoQBdwAAADV2t0maKbGc6hq1N9Y2cNPcnO7nrl0mVCOrOADgTREvyNW4urgweKiBz_joAMbyZyc9LkNpCFO6WPP0BfyD6okNMHCGg_4yjysGsa0AIkWy0fX0oEbp4Js9PGnc-QC3WftZbTiafvl9Vm6qMotny2M38P4viRGaVg5bY35Gpf_QEhCKRum8b1ndLNyeyrlIexXxGhRAJ-FLjRrD5XkTGKAvdy0b9G9jZA",
        "width": 4208
      }
    ],
    "place_id": "ChIJgeF3AKBz_UYRlaEHvBsd-0g",
    "rating": 4.3,
    "reference": "CmRRAAAASFXKJ_XuD0I8HNp8C0x5dAnRXmU_sCsZbd6PYqvnCH43VRtlu2UH73pmZCWxWvtAtJucCSIQqofJmxs_zsgJ9P7pGtJ-UZQbz-PGIkupa3gKi0SB7Kw8S9qxj4EhOcB4EhC3Xj-RUXXd23MJE4GV5xSsGhTWIi10dFk2tCD0z09DFuTZkwEEGw",
    "scope": "GOOGLE",
    "types": [
      "bar",
      "restaurant",
      "food",
      "point_of_interest",
      "establishment"
    ],
    "vicinity": "Szeroka 97, Gdańsk"
  },
  {
    "geometry": {
      "location": {
        "lat": 54.3506809,
        "lng": 18.6490529
      },
      "viewport": {
        "northeast": {
          "lat": 54.35088999999999,
          "lng": 18.6493967
        },
        "southwest": {
          "lat": 54.3506112,
          "lng": 18.6480215
        }
      }
    },
    "icon": "https://maps.gstatic.com/mapfiles/place_api/icons/bar-71.png",
    "id": "05340de4318c47c57b579ce0ff55bbd2f53c1129",
    "name": "Parking Sarówka",
    "place_id": "ChIJMazsNZ5z_UYRk-8YBC3-UQg",
    "reference": "CmRRAAAAUxKS6icXCbv7ukACEJaQivjUVzNVSNb8RjWde5xM0pBlscCaruY7kCdR5oII_xWD0ArCJ4ez-aNH4qFkoGkHklH9o-l65-tyGWZIqk7yNZXYeKVhDKrgLxoRCr1jLbsHEhCevHKh61k8JThwnLHDAD7oGhQATOCWiFbjh-3vqiz4Hj_G0UX3_w",
    "scope": "GOOGLE",
    "types": [
      "bar",
      "point_of_interest",
      "establishment"
    ],
    "vicinity": "Targ Węglowy 4, Gdańsk"
  },
  {
    "geometry": {
      "location": {
        "lat": 54.3518325,
        "lng": 18.651533
      },
      "viewport": {
        "northeast": {
          "lat": 54.3519152,
          "lng": 18.65157025
        },
        "southwest": {
          "lat": 54.3515844,
          "lng": 18.65142125000001
        }
      }
    },
    "icon": "https://maps.gstatic.com/mapfiles/place_api/icons/bar-71.png",
    "id": "8d3e695ca42400f484d85e03b8a59762b0e1a544",
    "name": "MANIACK CAFE",
    "opening_hours": {
      "open_now": false,
      "weekday_text": []
    },
    "place_id": "ChIJ05ohY3Vz_UYRn0R-cU0NKnY",
    "reference": "CmRRAAAACTYwrpezHAg6I42VRAv11c0YNWEhs4Id3RFUTYKYt5q7ve-w_uJJaR-uVJ9GHo7PJD604brtHUOQw_41a1_MT1LeXN2sJnDdqa5ITSNBQGjhAiza1DFV08P-eWiEjwhMEhAP0RgvIV4Rpw2nO1bskNntGhQ4zsatB_5LV4DVR3hzWBhvRLLcQA",
    "scope": "GOOGLE",
    "types": [
      "bar",
      "point_of_interest",
      "establishment"
    ],
    "vicinity": "Szeroka 119, Gdańsk"
  },
  {
    "geometry": {
      "location": {
        "lat": 54.3489892,
        "lng": 18.6481018
      },
      "viewport": {
        "northeast": {
          "lat": 54.3490161,
          "lng": 18.6485062
        },
        "southwest": {
          "lat": 54.34890849999999,
          "lng": 18.647967
        }
      }
    },
    "icon": "https://maps.gstatic.com/mapfiles/place_api/icons/bar-71.png",
    "id": "669cac9a0ec753da11b43fde32c51350962503c8",
    "name": "Bar Amsterdam",
    "photos": [
      {
        "height": 5344,
        "html_attributions": [
          "<a href=\"https://maps.google.com/maps/contrib/117542212991756049543/photos\">Andy Holt</a>"
        ],
        "photo_reference": "CoQBdwAAAB_ANtgp8VbwEQ62WInwmoCSA15kvosXxJTN7iJ5sfyPnol4PetiVFSQAPJrOF6ttrf_fpHeS9jGrOIm_eFJXomdvJYPOEUr0tr8aZoIRmTXSls4pd_vj1MCpyq4HYbBq8xbKh9sXHJdPpxR-cvFaa7QriLPM1yil2ePj1UgnDzyEhB7wLiLo3zoMAV-XIoEDDWZGhTdZL0LAhgpFB5QLmJIdBxajjOClw",
        "width": 3006
      }
    ],
    "place_id": "ChIJnZADAp9z_UYRoVEqVPLPzoc",
    "rating": 4.3,
    "reference": "CmRSAAAAzfCy7-CMEWWm8pUyG73jc-uBPlD4RV1WDKGsYtGaIJaGJcPKNZ7qOgxmBwCZEcQ2cSKRt0GqgL3MxcuKjtGkhMpNTn4sMZ6rOyXqxKDvcc7UGx4Mt7gV5YPMjkFJyJRnEhCmYa5uBg3yVYQ53ddnLVQBGhSnUgkZHWierlt6HWhK7lhbrZVTkA",
    "scope": "GOOGLE",
    "types": [
      "bar",
      "point_of_interest",
      "establishment"
    ],
    "vicinity": "Garbary 6, Gdańsk"
  }
]
DDFDFDF;

}
