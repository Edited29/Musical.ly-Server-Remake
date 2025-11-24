<?php
header('Content-Type: application/json; charset=utf-8');
?>
{
  "status_code": 0,
  "has_more": 0,
  "cursor": 0,
  "device_type": 1,
  "ad_info": {
    "ad_position": -1,
    "raw_ad_data": null
  },
  "category_list": [
    {
      "category_type": 1,
      "desc": "Description",
      "aweme_list": [
        {
          "aweme_id": "9876543210",
          "desc": "Description",
          "author": {
            "uid": "1",
            "nickname": "Admin",
            "unique_id": "admin"
          },
          "video": {
            "play_addr": {
              "url_list": [
                "https://cdn.exmaple.com/videos/sample.mp4"
              ]
            },
            "cover": {
              "url_list": [
                "https://cdn.exmaple.com/thumbs/sample.jpg"
              ]
            }
          }
        }
      ],
      "music_info": {
        "id": "112233",
        "title": "Sample Track",
        "cover_large": {
          "url_list": [
            "https://cdn.exmaple.com/music/sample.jpg"
          ]
        }
      },
      "challenge_info": {
        "cid": "998877",
        "cha_name": "name",
        "desc": "Description"
      }
    }
  ]
}
