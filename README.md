# momoha.php

momoha.php is an imageboard script.
It is a faithful translation and fork of the modern Futaba script. On the way, we will be adding the modern features of 4chan, Futaba Channel, and on and on.... you can make it just like Futaba, Futaba and 4chan, or just plain vanilla Futaba. (Hell, you could even make it Futaba Uploader-styled like /f/ if you want.)

But currently none of this is possible because it's.... **Currently barely complete lol**

I branched script to this repository.

This script aims running with PHP 5.4.15 or later...

# How to running
Requirements:
- PHP 5.4.15 - PHP 7.4 (PHP 8.0 works, but won't upload images for some reason)
- A webserver
- Hands

```
Grunt:
> cd app
> grunt concat:model
> grunt concat:momoha
> grunt shell:phpRunning
```
XAMPP:
```
> C:/xampp
> extract momoha-master
> delete htdocs and rename momoha-master to htdocs
```
Git:
```
> git clone ssh://git@github.com:ShockAwer/momha.git
```
Github CMD:
```
>gh repo clone ShockAwer/momoha
```
# ToDo

- Add Oekaki BBS
- Add "That's right!"/Thumbs up system
- Add handwritten text option
- NG Word
- Better support for more boards
- MySQL option
- I might add more later
- Design customizablity
-There is a problem of compatibility of the log charactor code.

## Countermeasure

Use by nkf (Nihongo Kanji Filter).

```
> nkf -Lu old.log > new.log
```

![みさわ](http://jigokuno.img.jugem.jp/20090928_1487687.gif)

# Lisence

This script for License is Public-domain.
I'm in accordance with the distribution of the [Futaba license](http://www.2chan.net/script/).


[![Bitdeli Badge](https://d2weczhvl823v0.cloudfront.net/futoase/futaba-ng/trend.png)](https://bitdeli.com/free "Bitdeli Badge")
