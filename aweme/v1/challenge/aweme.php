<?php
header('Content-Type: application/json; charset=utf-8');
?>
{
  "status_code": 0,
  "status_msg": "",
  "aweme_list": [
    {
      "aweme_id": "7000000000000000001",
      "desc": "Description",
      "author": {
        "uid": "1",
        "nickname": "user",
        "avatar_thumb": {
          "url_list": [
            "https://p16-sign-sg.tiktokcdn.com/obj/avatar1.jpeg"
          ]
        },
        "is_verified": true
      },
      "video": {
        "play_addr": {
          "url_list": [
            "https://api2.ror.bot.nu/static/mockvideo1.mp4"
          ]
        },
        "cover": {
          "url_list": [
            "https://p16-sign-sg.tiktokcdn.com/obj/cover1.jpeg"
          ]
        }
      },
      "statistics": {
        "play_count": 12000,
        "digg_count": 340,
        "comment_count": 14,
        "share_count": 4
      }
    }
  ],
  "has_more": false,
  "cursor": 0,
  "extra": {
    "now": 1710000000200,
    "logid": "20250101000000000000000000000002"
  }
}
