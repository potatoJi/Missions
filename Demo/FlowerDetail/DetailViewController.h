//
//  DetailViewController.h
//  FlowerDetail
//
//  Created by 冀威彤 on 15/5/14.
//  Copyright (c) 2015年 冀威彤. All rights reserved.
//

#import <UIKit/UIKit.h>

@interface DetailViewController : UIViewController <UISplitViewControllerDelegate>

@property (strong, nonatomic) id detailItem;

@property (weak, nonatomic) IBOutlet UILabel *detailDescriptionLabel;
@end
