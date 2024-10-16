var song_imgs_hash= ["images/legends.jpg","images/friends.jpg","images/vibe.png"];
        var song_songs = ["songs/Imagine-Dragons-Thunder.mp3"]
        var song_img = document.getElementById("song-img");
        var img_ptr = 0,l = song_imgs_hash.length;
        var song = document.getElementById("cur-song");
        var icon = document.getElementById("play-pause");
        var timer = document.getElementById("timer");
        function play_pause(){
            if(song.paused){
                song.play();
                icon.src = "Music Player Icons/2x/outline_pause_black_18dp.png";
            }
            else{
                song.pause();
                icon.src = "Music Player Icons/2x/outline_play_arrow_black_18dp.png";
            }
        }
        function fav(){
            
        }
        function play_prev(){
            img_ptr = (img_ptr - 1);
            if(img_ptr<0) img_ptr = l + img_ptr;
            song_img.src = song_imgs_hash[img_ptr];
            song.src = song_songs[img_ptr];
            song.play();
            timer.value = "0";
            icon.src = "Music Player Icons/2x/outline_play_arrow_black_18dp.png";
            play_pause();
        }
        function play_next(){
            img_ptr = (img_ptr + 1)%l;
            song_img.src = song_imgs_hash[img_ptr];
            song.src = song_songs[img_ptr];
            song.play();
            timer.value = "0";
            icon.src = "Music Player Icons/2x/outline_play_arrow_black_18dp.png";
            play_pause();
        }
        function adj_vol(){
            var val = document.getElementById("vol").value;
            song.volume = val/100;
        }
        function mute(){
            var val = document.getElementById("vol");
            var mute_img = document.getElementById("volume");
            if(val.value != 0){
                val.value = 0;
                mute_img.src = "Music Player Icons/2x/volume-mute-solid.svg";

                adj_vol();
            }
            else{
                mute_img.src = "Music Player Icons/2x/volume-up-solid.svg";
                val.value = 50;
                adj_vol();
            }
        }
        function adj_timer(){
            song.currentTime = song.duration*(timer.value/100);
        }