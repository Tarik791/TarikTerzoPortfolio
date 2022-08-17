const getLike = document.querySelector('.like');
const getLikeNum = document.querySelector('.likeNum');

let like = 0;

increaseLike = () => {

    like ++;
    getLikeNum.innerHTML = `${like}`;



}

likeClick = () => {

    increaseLike();

}

getLike.addEventListener(('click'), likeClick);

