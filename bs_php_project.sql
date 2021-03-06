CREATE DATABASE bs_php_project;

USE bs_php_project;

CREATE TABLE DB_ABOUT (
  ID_ABOUT INT NOT NULL AUTO_INCREMENT,
  ABOUT_TXT LONGTEXT,
  PRIMARY KEY (ID_ABOUT)
);

CREATE TABLE DB_TEAM (
  ID_MEMBER INT NOT NULL AUTO_INCREMENT,
  MEMBER_NAME varchar(255),
  MEMBER_IMG LONGBLOB,
  MEMBER_DESCRIPTION TEXT,
  PRIMARY KEY (ID_MEMBER)
);

CREATE TABLE ADMIN_CONFIG (
  ADM_ID INT NOT NULL AUTO_INCREMENT,
  PRIMARY_COLOR VARCHAR(255) NOT NULL,
  SECONDARY_COLOR VARCHAR(255) NOT NULL,
  PRIMARY KEY (ADM_ID)
);

INSERT INTO DB_ABOUT (ID_ABOUT, ABOUT_TXT) VALUES
(1, '            <div class=\"col-md-4\">\r\n\r\n              <h3>\r\n\r\n                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-trophy-fill\" viewBox=\"0 0 16 16\">\r\n                  \r\n                  <path d=\"M2.5.5A.5.5 0 0 1 3 0h10a.5.5 0 0 1 .5.5c0 .538-.012 1.05-.034 1.536a3 3 0 1 1-1.133 5.89c-.79 1.865-1.878 2.777-2.833 3.011v2.173l1.425.356c.194.048.377.135.537.255L13.3 15.1a.5.5 0 0 1-.3.9H3a.5.5 0 0 1-.3-.9l1.838-1.379c.16-.12.343-.207.537-.255L6.5 13.11v-2.173c-.955-.234-2.043-1.146-2.833-3.012a3 3 0 1 1-1.132-5.89A33.076 33.076 0 0 1 2.5.5zm.099 2.54a2 2 0 0 0 .72 3.935c-.333-1.05-.588-2.346-.72-3.935zm10.083 3.935a2 2 0 0 0 .72-3.935c-.133 1.59-.388 2.885-.72 3.935z\"/>\r\n\r\n                </svg>                \r\n\r\n              </h3>\r\n              <h2>Differential #01</h2>\r\n              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sit amet leo dolor. Praesent feugiat, lectus at rhoncus ornare, magna augue tincidunt nulla, sed cursus mauris justo nec quam. Sed pretium metus ut vehicula consectetur. Donec eu urna vitae velit interdum egestas. Phasellus tempor ac massa ac eleifend. Donec rhoncus sagittis nibh, eget viverra augue cursus vel. Etiam sit amet massa mi. Suspendisse non nibh vel est consectetur iaculis ut quis arcu. Duis quis viverra justo, ac pretium justo. Sed aliquam tortor sed elit finibus, quis efficitur ex porttitor. Donec interdum rhoncus velit vel consectetur. Praesent vulputate vulputate magna, eu sagittis neque interdum sed. Vestibulum sit amet dapibus ligula. Morbi porttitor vel enim imperdiet tincidunt.</p>\r\n\r\n            </div>\r\n            <div class=\"col-md-4\">\r\n\r\n              <h3>\r\n\r\n                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-star-fill\" viewBox=\"0 0 16 16\">\r\n                  <path d=\"M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z\"/>\r\n                </svg>\r\n\r\n              </h3>\r\n              <h2>Differential #02</h2>\r\n              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sit amet leo dolor. Praesent feugiat, lectus at rhoncus ornare, magna augue tincidunt nulla, sed cursus mauris justo nec quam. Sed pretium metus ut vehicula consectetur. Donec eu urna vitae velit interdum egestas. Phasellus tempor ac massa ac eleifend. Donec rhoncus sagittis nibh, eget viverra augue cursus vel. Etiam sit amet massa mi. Suspendisse non nibh vel est consectetur iaculis ut quis arcu. Duis quis viverra justo, ac pretium justo. Sed aliquam tortor sed elit finibus, quis efficitur ex porttitor. Donec interdum rhoncus velit vel consectetur. Praesent vulputate vulputate magna, eu sagittis neque interdum sed. Vestibulum sit amet dapibus ligula. Morbi porttitor vel enim imperdiet tincidunt.</p>\r\n\r\n            </div>\r\n            <div class=\"col-md-4\">\r\n\r\n              <h3>\r\n\r\n                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-heart-fill\" viewBox=\"0 0 16 16\">\r\n        \r\n                  <path fill-rule=\"evenodd\" d=\"M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z\"/>\r\n\r\n                </svg>\r\n\r\n              </h3>\r\n              <h2>Differential #03</h2>\r\n              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sit amet leo dolor. Praesent feugiat, lectus at rhoncus ornare, magna augue tincidunt nulla, sed cursus mauris justo nec quam. Sed pretium metus ut vehicula consectetur. Donec eu urna vitae velit interdum egestas. Phasellus tempor ac massa ac eleifend. Donec rhoncus sagittis nibh, eget viverra augue cursus vel. Etiam sit amet massa mi. Suspendisse non nibh vel est consectetur iaculis ut quis arcu. Duis quis viverra justo, ac pretium justo. Sed aliquam tortor sed elit finibus, quis efficitur ex porttitor. Donec interdum rhoncus velit vel consectetur. Praesent vulputate vulputate magna, eu sagittis neque interdum sed. Vestibulum sit amet dapibus ligula. Morbi porttitor vel enim imperdiet tincidunt.</p>              \r\n            \r\n            </div>\r\n');
