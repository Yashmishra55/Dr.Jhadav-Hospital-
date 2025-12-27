-- ============================================
-- TEAM TABLE SCHEMA
-- Based on usage in index.php and teams-details.php
-- ============================================

CREATE TABLE IF NOT EXISTS `team` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `designation` VARCHAR(255) DEFAULT NULL,
    `short_description` TEXT COMMENT 'Brief description shown on team listing page',
    `description` LONGTEXT COMMENT 'Full description shown on team detail page',
    `image` VARCHAR(255) DEFAULT NULL,
    `created_at` DATETIME DEFAULT NULL,
    `updated_at` DATETIME DEFAULT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Sample INSERT query (uncomment and modify as needed)
/*
INSERT INTO `team` (
    `name`, 
    `designation`, 
    `short_description`, 
    `description`, 
    `image`,
    `created_at`
) VALUES (
    'Dr. Shivraj Jadhav',
    'Founder',
    'The visionary behind our hospital, Dr.Shivraj Jadhav\'s passion for healthcare and dedication to societal well-being have shaped our institution\'s journey.',
    'Full detailed description of Dr. Shivraj Jadhav...',
    'team-1.jpg',
    NOW()
),
(
    'Dr. Megha Shivraj Jadhav',
    'Co-Founder',
    'Playing a crucial role in the hospital\'s management, Dr.Megha Shivraj Jadhav\'s commitment to community welfare and healthcare initiatives has been instrumental in our success.',
    'Full detailed description of Dr. Megha Shivraj Jadhav...',
    'team-2.jpg',
    NOW()
);
*/

