const posts = document.querySelectorAll(".ProfilPosts");

const shonenButton = document.querySelector(".tag1");
const shonenTag = document.querySelectorAll(".shonen");

shonenButton.addEventListener("click", () => {
  posts.forEach((post) => {
    post.classList.remove("ProfilPosts");
    post.classList.add("none");
  });
  shonenTag.forEach((tag) => {
    tag.classList.remove("none");
    tag.classList.add("ProfilPosts");
  });
});

const shojoButton = document.querySelector(".tag2");
const shojoTag = document.querySelectorAll(".shojo");

shojoButton.addEventListener("click", () => {
  posts.forEach((post) => {
    post.classList.remove("ProfilPosts");
    post.classList.add("none");
  });
  shojoTag.forEach((tag) => {
    tag.classList.remove("none");
    tag.classList.add("ProfilPosts");
  });
});

const seinenButton = document.querySelector(".tag3");
const seinenTag = document.querySelectorAll(".seinen");

seinenButton.addEventListener("click", () => {
  posts.forEach((post) => {
    post.classList.remove("ProfilPosts");
    post.classList.add("none");
  });
  seinenTag.forEach((tag) => {
    tag.classList.remove("none");
    tag.classList.add("ProfilPosts");
  });
});

const joseiButton = document.querySelector(".tag4");
const joseiTag = document.querySelectorAll(".josei");

joseiButton.addEventListener("click", () => {
  posts.forEach((post) => {
    post.classList.remove("ProfilPosts");
    post.classList.add("none");
  });
  joseiTag.forEach((tag) => {
    tag.classList.remove("none");
    tag.classList.add("ProfilPosts");
  });
});

const newgenButton = document.querySelector(".tag5");
const newgenTag = document.querySelectorAll(".newgen");

newgenButton.addEventListener("click", () => {
  posts.forEach((post) => {
    post.classList.remove("ProfilPosts");
    post.classList.add("none");
  });
  newgenTag.forEach((tag) => {
    tag.classList.remove("none");
    tag.classList.add("ProfilPosts");
  });
});

const oldgenButton = document.querySelector(".tag6");
const oldgenTag = document.querySelectorAll(".oldgen");

oldgenButton.addEventListener("click", () => {
  posts.forEach((post) => {
    post.classList.remove("ProfilPosts");
    post.classList.add("none");
  });
  oldgenTag.forEach((tag) => {
    tag.classList.remove("none");
    tag.classList.add("ProfilPosts");
  });
});

const animeButton = document.querySelector(".tag7");
const animeTag = document.querySelectorAll(".anime");

animeButton.addEventListener("click", () => {
  posts.forEach((post) => {
    post.classList.remove("ProfilPosts");
    post.classList.add("none");
  });
  animeTag.forEach((tag) => {
    tag.classList.remove("none");
    tag.classList.add("ProfilPosts");
  });
});

const mangaButton = document.querySelector(".tag8");
const mangaTag = document.querySelectorAll(".manga");

mangaButton.addEventListener("click", () => {
  posts.forEach((post) => {
    post.classList.remove("ProfilPosts");
    post.classList.add("none");
  });
  mangaTag.forEach((tag) => {
    tag.classList.remove("none");
    tag.classList.add("ProfilPosts");
  });
});

const newsButton = document.querySelector(".tag9");
const newsTag = document.querySelectorAll(".news");

shonenButton.addEventListener("click", () => {
  posts.forEach((post) => {
    post.classList.remove("ProfilPosts");
    post.classList.add("none");
  });
  newsTag.forEach((tag) => {
    tag.classList.remove("none");
    tag.classList.add("ProfilPosts");
  });
});

const elseButton = document.querySelector(".tag10");
const elseTag = document.querySelectorAll(".else");

elseButton.addEventListener("click", () => {
  posts.forEach((post) => {
    post.classList.remove("ProfilPosts");
    post.classList.add("none");
  });
  elseTag.forEach((tag) => {
    tag.classList.remove("none");
    tag.classList.add("ProfilPosts");
  });
});

const contenupost = document.querySelector('textarea');

const storage = "text";

const addpost = document.getElementsByClassName('AddPost');

const locsto = () => {
    text.value.localStorage.getItem(storage);

    text.addEventListener("input", () => {
        locsto.setItem(storage, text.value)
    })

    addpost.addEventListener("click", () => {
      localStorage.removeItem(storage, text.value);
    });

    init();
}
