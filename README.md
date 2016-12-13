# Status Board Facebook Likes
Show the number of likes of a Facebook page on your *Panic Status Board*. Because (1) I wanted to host the script on my own server and (2) the **file_get_contents** function in other scripts didn't work for me, I wrote this **cURL** version. 

7 lines of php, 1 URL for you to adapt… and you're ready to go.

## STATUS BOARD IS DISCONTINUED!
Update November 2016: From now on, Status Board is history. Read more about it on the [Panic Blog](https://panic.com/blog/the-future-of-status-board/).

## How to use it
1. Download **statusboard-facebook-likes.php** and change the URL in line 17 so that it points to your Facebook page's graph. (http://graph.facebook.com/YOURPAGENAME)
2. Upload the file to your server.
3. On your iPad: Open Status Board, add a DIY panel (the one with the "< >" symbols), tap on it and enter the path to the files on your server. (http://example.com/path/to/statusboard-facebook-likes.php)
4. Be happy.

## For minimalists
If you only want the php function without the styling stuff, here is the [snippet on Gist](https://gist.github.com/gimesi/6521397).

## Notes
- This is just a minimal 3-minute-example. Of course you can change, modify, adapt and go crazy with it.
- The script is primarily intended for my personal use and is provided **"as is"**. I have no plans of making updates on a regular basis. There's no warranty expressed or implied. Use it at your own risk.
- Anyway, if you have suggestions, corrections, or just want to say hello, please feel free to drop me a line on Twitter ([@gimesi](http://twitter.com/gimesi)).
