This system works exactly like the Like/Dislike system YouTube implements for its videos. On YouTube, the buttons are placed on videos.
But, we will be using simple posts where users can click on their associated like and dislike buttons.  

#### We will be using:

==>> Ajax of JQuery to communicate with the server without reloading the page.
==>> JQuery to select elements and write values and styles and attributes on the DOM.
==>> PHP to do the backend logic like receiving click actions and performing the database calls
==>> MySQL as the database

For the database, create 'posts' table using the sql query below:

CREATE TABLE `posts` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


For rating_info:

CREATE TABLE `rating_info` (
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `rating_action` varchar(30) NOT NULL,
   CONSTRAINT UC_rating_info UNIQUE (user_id, post_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


You can populate the posts table with a few posts that we are going to be liking and disliking. Run the following commands to populate the table:

INSERT INTO `posts` (`id`, `text`) VALUES
(1, 'This is the first post'),
(2, 'This is the second piece of text'),
(3, 'This is the third post'),
(4, 'This is the fourth piece of text');


Note: Make sure that on the rating_info table, the user_id and post_id fields are UNIQUE. Which means that there cannot be two records of a particular user and a particular post on the table.





