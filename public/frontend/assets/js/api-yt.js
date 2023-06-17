const videoCardContainer = document.querySelector('.video-container');

let api_key = "AIzaSyCwpmAadmlAOm5prywcs9h4MyjQsy0i87s"; // UCqXoFpy1zT9oYR5y6DTuGyA (Chanel ID 13NADIMUSIK)
let video_http = "https://www.googleapis.com/youtube/v3/videos?";
let channel_http = "https://www.googleapis.com/youtube/v3/channels?";

fetch(video_http + new URLSearchParams({
    key: api_key,
    part: 'snippet',
    chart: 'mostPopular',
    maxResults: 2,
    regionCode: 'ID'
}))
.then(res => res.json())
.then(data => {
    data.items.forEach(item => {
        getChannelIcon(item);
    })
})
.catch(err => console.log(err));

const getChannelIcon = (video_data) => {
    fetch(channel_http + new URLSearchParams({
        key: api_key,
        part: 'snippet',
        id: video_data.snippet.channelId
    }))
    .then(res => res.json())
    .then(data => {
        video_data.channelThumbnail = data.items[0].snippet.thumbnails.default.url;
        makeVideoCard(video_data);
    })
}

const makeVideoCard = (data) => {
    videoCardContainer.innerHTML += `
    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
        <div class="video" onclick="location.href = 'https://youtube.com/watch?v=${data.id}'">
            <div class="member rounded-discover">
                <img src="${data.snippet.thumbnails.high.url}" class="img-fluid" alt="" style="height:300px;width:100%;">
                <div class="member-info">
                    <div class="member-info-content">
                        <div class="container">
                            <div class="d-flex align-items-center">
                                <img src="${data.channelThumbnail}" alt="Profile" class="rounded-circle" style="height:80px;">
                                <div class="d-block text-start ms-3">
                                    <span class="color-tosca">${data.snippet.channelTitle}</span>
                                        <h4>${data.snippet.title}</h4>
                                    <span>${data.snippet.publishedAt}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    `;
}

// search bar

const searchInput = document.querySelector('.search-bar');
const searchBtn = document.querySelector('.search-btn');
let searchLink = "https://www.youtube.com/results?search_query=";

searchBtn.addEventListener('click', () => {
    if(searchInput.value.length){
        location.href = searchLink + searchInput.value;
    }
})