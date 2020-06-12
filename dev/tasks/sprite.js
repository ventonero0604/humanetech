//Gulp
import gulp from "gulp";
import hash from "./hash";
import spritesmith from "gulp.spritesmith";
import del from "del";
import _ from "lodash";

// Data
const pkg = require("../package.json");
const path = {
  src: pkg.directories.src,
};

gulp.task("cleanSprite", function (cd) {
  return del([`${path.src}/dist/image/all_*`]).then(() => {
    cd();
  });
});

gulp.task("spriteGen", function () {
  const spriteData = gulp.src(path.src + "/asset/sprite/*").pipe(
    spritesmith({
      imgName:
        process.env.NODE_ENV === "production"
          ? `./dist/image/all_${hash.normal()}.png`
          : `./dist/image/all.png`,
      cssName: "./css/tool/sprite.css",
      imgPath:
        process.env.NODE_ENV === "production"
          ? ``
          : `../image/all.png`,
      cssTemplate: path.src + "/css/tool/sprite/_sprite-map.css.mustache",
      padding: 4,
      cssVarMap: (function () {
        var index = 0;

        return function (sprite) {
          sprite.width = sprite.width / 2;
          sprite.height = sprite.height / 2;
          sprite.x = sprite.x / 2;
          sprite.y = sprite.y / 2;
          sprite.name = _.camelCase(sprite.name);

          if (index === 0) {
            sprite.map = {
              width: sprite.total_width / 2 + "px",
              height: sprite.total_height / 2 + "px",
              image: sprite.image.replace(/_2x/, ""),
              image2x: sprite.image,
            };
          }
          index++;
        };
      })(),
    })
  );
  return spriteData.pipe(gulp.dest(path.src));
});

gulp.task("sprite", gulp.series("cleanSprite", "spriteGen"));
