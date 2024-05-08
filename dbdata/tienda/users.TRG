TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`%` TRIGGER create_cart_after_user_creation\n            AFTER INSERT ON users\n            FOR EACH ROW\n            BEGIN\n                INSERT INTO carts (user_id, created_at, updated_at) VALUES (NEW.id, NOW(), NOW());\n            END'
sql_modes=1436549152
definers='root@%'
client_cs_names='utf8mb4'
connection_cl_names='utf8mb4_unicode_ci'
db_cl_names='latin1_swedish_ci'
created=171518613765
