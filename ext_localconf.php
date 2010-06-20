<?php

if(!defined('TYPO3_MODE'))
	die('Access denied.');



$configuration =
'mod.wizards.newContentElement.wizardItems.Hype {
	header = Hype
	
	elements {
		HypeDirectory {
			icon = ../typo3conf/ext/hype_directory/Resources/Private/directory-plugin.png
			title = Directory
			description = Provides a basic system for storing contact data.
			tt_content_defValues {
				CType = list
				list_type = hypedirectory_directory
			}
		}
		
		HypeRating {
			icon = ../typo3conf/ext/hype_rating/Configuration/Icons/hype_rating-rating.plugin.gif
			title = Rating
			description = Use this plugin to rate this page or a any other custom content element.
			tt_content_defValues {
				CType = list
				list_type = hype_rating_pi1
			}
		}
		
		HypeJigRoutePlanner {
			icon = ../typo3conf/ext/hype_jig/Configuration/Icons/hype_jig-routeplanner.plugin.png
			title = Route Planner
			description = Adds a route planner to the page. Choose between different map services.
			tt_content_defValues {
				CType = list
				list_type = hypejig_routeplanner
			}
		}
		
		HypeJigFileList {
			icon = ../typo3conf/ext/hype_jig/Configuration/Icons/hype_jig-filelist.plugin.png
			title = File List
			description = Displays a list of downloadable files. Also directory structures will be shown recursively, if configured.
			tt_content_defValues {
				CType = list
				list_type = hypejig_filelist
			}
		}
		
		HypeStoreCategory {
			icon = ../typo3conf/ext/hype_store/Resources/Private/store-plugin.png
			title = Store, Category
			description = Displays store categories including sub-categories and products.
			tt_content_defValues {
				CType = list
				list_type = hypestore_category
			}
		}
		HypeStoreProduct {
			icon = ../typo3conf/ext/hype_store/Resources/Private/store-plugin.png
			title = Store, Product
			description = Shows selected store products including prices, attributes and a lot more.
			tt_content_defValues {
				CType = list
				list_type = hypestore_product
			}
		}
		HypeStoreCart {
			icon = ../typo3conf/ext/hype_store/Resources/Private/store-plugin.png
			title = Store, Cart
			description = Holds all products to purchase.
			tt_content_defValues {
				CType = list
				list_type = hypestore_cart
			}
		}
		
		HypeShowcaseClient {
			icon = ../typo3conf/ext/hype_showcase/Resources/Private/showcase-plugin.png
			title = Showcase, Client
			description = Displays a client\'s details including related projects.
			tt_content_defValues {
				CType = list
				list_type = hypeshowcase_client
			}
		}
		HypeShowcaseProject {
			icon = ../typo3conf/ext/hype_showcase/Resources/Private/showcase-plugin.png
			title = Showcase, Project
			description = Shows all details of a selected project.
			tt_content_defValues {
				CType = list
				list_type = hypeshowcase_project
			}
		}
		
		HypeSurge {
			icon = ../typo3conf/ext/hype_surge/Configuration/Icons/hype_surge-errordisplay.plugin.gif
			title = Error Display
			description = Shows a 404 error message with several optional features. Use this only in combination with the domain settings.
			tt_content_defValues {
				CType = list
				list_type = hypesurge_errordisplay
			}
		}
	}
}';



$extensions = array('hype_directory', 'hype_frame', 'hype_jig', 'hype_rating', 'hype_store', 'hype_showcase', 'hype_surge');

foreach($extensions as $extension) {
	
	# skip if extension is not installed
	if(!t3lib_extMgm::isLoaded($extension))
		continue;
	
	# switch to desired extension
	switch($extension) {
		
		# add directory plugins
		case 'hype_directory':
			$configuration .= chr(10) . 'mod.wizards.newContentElement.wizardItems.Hype.show := addToList(HypeDirectory)';
			break;
			
		# add rating plugins
		case 'hype_rating':
			$configuration .= chr(10) . 'mod.wizards.newContentElement.wizardItems.Hype.show := addToList(HypeJigRoutePlanner,HypeJigFileList)';
			break;
		
		# add jig plugins
		case 'hype_jig':
			$configuration .= chr(10) . 'mod.wizards.newContentElement.wizardItems.Hype.show := addToList(HypeRating)';
			break;
		
		# add showcase plugins
		case 'hype_store':
			$configuration .= chr(10) . 'mod.wizards.newContentElement.wizardItems.Hype.show := addToList(HypeStoreCategory,HypeStoreProduct,HypeStoreCart)';
			break;
		
		# add showcase plugins
		case 'hype_showcase':
			$configuration .= chr(10) . 'mod.wizards.newContentElement.wizardItems.Hype.show := addToList(HypeShowcaseClient,HypeShowcaseProject)';
			break;
		
		# add surge plugins
		case 'hype_surge':
			$configuration .= chr(10) . 'mod.wizards.newContentElement.wizardItems.Hype.show := addToList(HypeSurge)';
			break;
	}
}

# add page TSconf
t3lib_extMgm::addPageTSConfig($configuration);

?>