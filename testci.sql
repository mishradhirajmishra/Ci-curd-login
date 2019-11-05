CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `user` (`id`, `username`, `password`, `email`, `created_at`, `updated_at`) VALUES
(1, 'dk1', '202cb962ac59075b964b07152d234b70', 'dk@gmail.com', '2019-07-26 06:44:51', '2019-11-05 13:25:38');


ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;
