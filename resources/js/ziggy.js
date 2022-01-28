const Ziggy = {
  url: "http://localhost:8000",
  port: null,
  defaults: {},
  routes: {
    home: { uri: "/", methods: ["GET", "HEAD"] },
    login: { uri: "login", methods: ["GET", "HEAD"] },
    signup: { uri: "signup", methods: ["GET", "HEAD"] },
    book: { uri: "book/{id}", methods: ["GET", "HEAD"] },
    details: { uri: "details/{movie}", methods: ["GET", "HEAD"] },
    discoverbookdetails: { uri: "discoverbookdetails", methods: ["POST"] },
    movies: { uri: "movies", methods: ["GET", "HEAD"] },
  },
};

if (typeof window !== "undefined" && typeof window.Ziggy !== "undefined") {
  Object.assign(Ziggy.routes, window.Ziggy.routes);
}

export { Ziggy };
