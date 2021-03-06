
/*******************************************************************************
* This file was generated by UI Builder.
* This file will be auto-generated each and everytime you save your project.
* Do not hand edit this file.
********************************************************************************/

#ifndef UIB_APP_MANAGER_H_
#define UIB_APP_MANAGER_H_

#include "g_inc_uib.h"
#include "uib_views.h"
#include "app_main.h"


typedef struct {
	bool _is_init;
	uib_view_context* (*initialize)();
	void (*finalize)();
	const uib_device_info_st* (*get_uib_device_info)();
	int (*add_view_context)(uib_view_context*);
	uib_view_context* (*find_view_context)(char*);
	void (*free_all_view_context)();
} uib_app_manager_st;

uib_app_manager_st* uib_app_manager_get_instance();

#endif /* UIB_APP_MANAGER_H_ */

