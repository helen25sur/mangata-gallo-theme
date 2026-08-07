import { __ } from '@wordpress/i18n';
import {
  useBlockProps,
  RichText,
  MediaUpload,
  MediaUploadCheck,
} from '@wordpress/block-editor';
import { Button } from '@wordpress/components';

export default function Edit({ attributes, setAttributes }) {
  const { heading, percent, promoText, buttonText, images } = attributes;
  const blockProps = useBlockProps({ className: 'promo' });

  const updateImage = (index, media) => {
    const newImages = [...images];
    newImages[index] = { url: media.url, alt: media.alt || '' };
    setAttributes({ images: newImages });
  };

  return (
    <div {...blockProps}>
      <div className="container">
        <div className="img-products-block">
          {images.map((image, index) => (
            <MediaUploadCheck key={index}>
              <MediaUpload
                onSelect={(media) => updateImage(index, media)}
                allowedTypes={['image']}
                render={({ open }) =>
                  image.url ? (
                    <img
                      src={image.url}
                      alt={image.alt}
                      width="580"
                      onClick={open}
                      style={{ cursor: 'pointer' }}
                    />
                  ) : (
                    <Button
                      onClick={open}
                      variant="secondary"
                      style={{ position: 'absolute', top: index * 60, zIndex: 10 }}
                    >
                      {__('Фото', 'mangata-gallo-jewelry-theme')} {index + 1}
                    </Button>
                  )
                }
              />
            </MediaUploadCheck>
          ))}
        </div>

        <div className="promo-content">
          <RichText
            tagName="h1"
            value={heading}
            onChange={(value) => setAttributes({ heading: value })}
          />
          <p className="promo-text">
            <RichText
              tagName="span"
              className="promo-percent"
              value={percent}
              onChange={(value) => setAttributes({ percent: value })}
            />
            {' off'}
          </p>
          <RichText
            tagName="p"
            className="promo-text"
            value={promoText}
            onChange={(value) => setAttributes({ promoText: value })}
          />
          <button className="btn btn-shop">
            <RichText
              tagName="span"
              value={buttonText}
              onChange={(value) => setAttributes({ buttonText: value })}
            />
          </button>
        </div>
      </div>
    </div>
  );
}